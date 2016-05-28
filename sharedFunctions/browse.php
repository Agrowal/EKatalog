		<?php
		// Sanitize POST
		$post=filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

		if($post['searchSubmit']){

			if($post['type1']=='' AND $post['type2']=='' AND $post['type3']==''){
			Messages::setMsg('Please Fill In Type','error');
			return;
			}

			// $type = 'GatunekTyp = :type1 OR GatunekTyp = :type2 OR GatunekTyp = :type3 OR GatunekTyp = :type4 OR GatunekTyp = :type5 OR GatunekTyp = :type6';
			$strefa = 'AND WHERE GatunekStrefa = :strefa ';
			$ekspozycja = 'AND WHERE GatunekEkspozycja = :ekspozycja ';


			// Browse
			$this->query('SELECT * FROM (SELECT * FROM (SELECT * FROM (SELECT * FROM (SELECT * FROM Gatunek WHERE GatunekNazwaPL LIKE :namePL) AS polskie WHERE GatunekNazwaLAT LIKE :nameLAT) AS lacinskie  WHERE GatunekTyp = :type1 OR GatunekTyp = :type2 OR GatunekTyp = :type3 OR GatunekTyp = :type4 OR GatunekTyp = :type5 OR GatunekTyp = :type6) AS typy WHERE GatunekStrefa LIKE :strefa) AS strefy WHERE '.(empty($post['ekspozycja'])? "" : "GatunekEkspozycja = :ekspozycja AND ").'GatunekRozmiar < :rozmiar ORDER BY GatunekNazwaPL '.$post['order']);

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
			$this->bind(':type4',$post['type4']);
			$this->bind(':type5',$post['type5']);
			$this->bind(':type6',$post['type6']);

			// Messages::setMsg($this->stmt->debugDumpParams(),'error');		

			$rows=$this->resultSet();
			return $rows;
		}