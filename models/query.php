<?php
class QueryModel extends Model{
	public function Index(){
		$this->query('SELECT * FROM	Gatunek ORDER BY GatunekID DESC LIMIT 5');
		$rows=$this->resultSet();
		return $rows;
	}

	// SELECT 
	// 			GatunekNazwaPL,
	// 			GatunekNazwaLAT,
	// 			GatunekTyp,
	// 			GatunekStrefa,
	// 			GatunekRozmiar,
	// 			GatunekEkspozycja,
	// 			GatunekOpis,
	// 			KolorNazwa,
	// 			GlebaNazwa
	// 			FROM 
	// 			gatunek,
	// 			gatunek_has_kolor,
	// 			kolor,
	// 			gatunek_has_gleba,
	// 			gleba
	// 			WHERE
	// 			GatunekNazwaPL = ghk_GatunekNazwaPL AND
	// 			ghk_KolorNazwa = KolorNazwa AND
	// 			GatunekNazwaPL = ghg_GatunekNazwaPL AND
	// 			ghg_GlebaNazwa = GlebaNazwa



	public function add(){
		// Sanitize POST
		$post=filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

		if($post['submit']){

			$imgUrl=$this->upload($post);

			if($post['namePL']==''){
			Messages::setMsg('Please Fill In NamePL','error');
			return;
			}

			// Insert into MySQL
			$tabela='Gatunek';
			$this->query('INSERT INTO '.$tabela.' (GatunekNazwaPL,GatunekNazwaLAT,GatunekTyp,GatunekStrefa,GatunekRozmiar,GatunekEkspozycja,GatunekOpis, GatunekIMG) VALUES (:namePL, :nameLAT, :type, :strefa, :rozmiar, :ekspozycja, :des, :imgUrl)');
			// $this->bind(':tabName',$post['table']);
			$this->bind(':namePL',$post['namePL']);
			$this->bind(':nameLAT',$post['nameLAT']);
			$this->bind(':type',$post['type']);
			$this->bind(':strefa',$post['strefa']);
			$this->bind(':rozmiar',$post['size']);
			$this->bind(':ekspozycja',$post['ekspozycja']);
			$this->bind(':des',$post['des']);

			$this->bind(':imgUrl',$imgUrl);

			$this->execute();

			// Verify
			if($this->lastInsertId()){
				Messages::setMsg('Insert successful','success');
				//Redirect
				// header('Location:'.ROOT_URL.'queries');
			}
		}
		return ;
	}


	public function browse(){
		// Sanitize POST
		$post=filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

		if($post['searchSubmit']){

			if($post['type1']=='' AND $post['type2']=='' AND $post['type3']==''){
			Messages::setMsg('Please Fill In Type','error');
			return;
			}

			$type = 'GatunekTyp = :type1 OR GatunekTyp = :type2 OR GatunekTyp = :type3 ';
			$strefa = 'AND WHERE GatunekStrefa = :strefa ';
			$ekspozycja = 'AND WHERE GatunekEkspozycja = :ekspozycja ';


			// Browse
			$this->query('SELECT * FROM (SELECT * FROM (SELECT * FROM (SELECT * FROM (SELECT * FROM Gatunek WHERE GatunekNazwaPL LIKE :namePL) AS polskie WHERE GatunekNazwaLAT LIKE :nameLAT) AS lacinskie  WHERE GatunekTyp = :type1 OR GatunekTyp = :type2 OR GatunekTyp = :type3) AS typy WHERE GatunekStrefa LIKE :strefa) AS strefy WHERE '.(empty($post['ekspozycja'])? "" : "GatunekEkspozycja = :ekspozycja AND ").'GatunekRozmiar < :rozmiar ORDER BY GatunekNazwaPL '.$post['order']);

			$this->bind(':namePL','%'.$post['namePL'].'%');
			$this->bind(':nameLAT','%'.$post['nameLAT'].'%');

			$this->bind(':strefa','%'.$post['strefa'].'%');

			if($post['ekspozycja']!=''){
				$this->bind(':ekspozycja',$post['ekspozycja']);
			}


			$this->bind(':rozmiar',$post['size']);
				



			$this->bind(':type1',$post['type1']);
			$this->bind(':type2',$post['type2']);
			$this->bind(':type3',$post['type3']);

			// Messages::setMsg($this->stmt->debugDumpParams(),'error');
		

			$rows=$this->resultSet();
			return $rows;
		}
	}

	public function upload($post){
		$target_dir = $_SERVER['DOCUMENT_ROOT'] .ROOT_PATH. 'assets/images/uploads/';

		$temp = explode(".", $_FILES["fileToUpload"]["name"]);
		$newfilename = $post['namePL'].'.'.end($temp);

		$target_file = $target_dir . $newfilename;
		$uploadOk = 1;
		$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
		// Check if image file is a actual image or fake image
		if(isset($_POST["submit"])) {
		    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
		    if($check !== false) {
		        // echo "File is an image - " . $check["mime"] . ".";
		        $uploadOk = 1;
		    } else {
		        Messages::setMsg("File is not an image.","error");
		        $uploadOk = 0;
		        return;
		    }
		}
		// Check if file already exists
		if (file_exists($target_file)) {
			Messages::setMsg("Sorry, file already exists.","error");
		    $uploadOk = 0;
		    return;
		}
		// Check file size
		if ($_FILES["fileToUpload"]["size"] > 500000) {
			Messages::setMsg("Sorry, your file is too large.","error");
		    $uploadOk = 0;
		    return;
		}
		// Allow certain file formats
		if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
		&& $imageFileType != "gif" ) {
			Messages::setMsg("Sorry, only JPG, JPEG, PNG & GIF files are allowed.","error");
		    $uploadOk = 0;
		    return;
		}
		// Check if $uploadOk is set to 0 by an error
		if ($uploadOk == 0) {
			Messages::setMsg("Sorry, your file was not uploaded.","error");
			return;
		// if everything is ok, try to upload file
		} else {

			if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
		        // Messages::setMsg("The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.","success");
		    } else {
		    	Messages::setMsg("Sorry, there was an error uploading your file.","error");
		    }
		}
		$file_realtive_dir = ROOT_PATH. 'assets/images/uploads/'.$newfilename;
		return $file_realtive_dir;

	}
}