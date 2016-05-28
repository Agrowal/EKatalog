<?php
class UserModel extends Model{
	public function register(){

		// Sanitize POST
		$post=filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);



		$password = sha1($post['password']);
		$activasion = sha1(uniqid(rand(),true));

		if($post['submit']){

			if($post['name']==''||$post['email']==''||$post['password']==''){
				Messages::setMsg('Please Fill In All Fields','error');
				return;
			}

			if($post['password']!=$post['passwordCheck']){
				Messages::setMsg('Passwords do not match','error');
				return;
			}

			// Check UserName in MySQL
			$this->query('SELECT UserName FROM User WHERE UserName = :name');
			$this->bind(':name',$post['name']);
			$rowUserName=$this->single();
			if($rowUserName){
				Messages::setMsg('User name already exists.','error');
				return;
			}

			// Check UserEmail in MySQL
			$this->query('SELECT UserName FROM User WHERE UserEmail = :email');
			$this->bind(':email',$post['email']);
			$rowUserEmail=$this->single();
			if($rowUserEmail){
				Messages::setMsg('Email already exists.','error');
				return;
			}



			// Insert into MySQL
			$this->query('INSERT INTO User (UserName,UserEmail,UserPassword, UserActive) VALUES (:name, :email, :password, :active)');

			$this->bind(':name',$post['name']);
			$this->bind(':email',$post['email']);
			$this->bind(':password',$password);
			$this->bind(':active',$activasion);

			$this->execute();


			// Verify
			if($id=$this->lastInsertId('UserID')){

				// $id=lastInsertId('UserID');

				$to = $post['email'];
				$subject = "Registration Confirmation";
				$body = "<p>Thank you for registering at demo site.</p>
				<p>To activate your account, please click on this link: <a href='".ROOT_URL."users/activate?x=$id&y=$activasion'>".ROOT_URL."users/activate?x=$id&y=$activasion</a></p>
				<p>Regards Site Admin</p>";

				$mail = new Mail();
				$mail->setFrom(SITEEMAIL);
				$mail->addAddress($to);
				$mail->subject($subject);
				$mail->body($body);
				$mail->send();

				//Redirect
				header('Location:'.ROOT_URL.'users/login');
			}
		}
		return;
	}

	public function login(){

		// Sanitize POST
		$post=filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

		$password = sha1($post['password']);

		if($post['submit']){

			// Compare with MySQL users
			$this->query("SELECT * FROM User WHERE UserEmail = :email AND UserPassword = :password AND UserActive = 'Yes'");

			$this->bind(':email',$post['email']);
			$this->bind(':password',$password);

			$row=$this->single();

			if($row){
				$_SESSION['is_logged_in'] = true;
				$_SESSION['user_data']= array(
					"id" 	=> $row['UserID'],
					"name" 	=> $row['UserName'],
					"email" => $row['UserEmail'] );

					header('Location:'.ROOT_URL.'queries');

			} else {

				// Compare with MySQL users
				$this->query("SELECT * FROM User WHERE UserEmail = :email AND UserPassword = :password ");

				$this->bind(':email',$post['email']);
				$this->bind(':password',$password);

				$row=$this->single();

				if($row){

					Messages::setMsg('Login failed, check your email and activate account.','error');
				} else {
					Messages::setMsg('Login failed, incorrect login data.','error');
				}
			}
		}
		return;
	}

	public function activate(){


		//collect values from the url
		$memberID = trim($_GET['x']);
		$active = trim($_GET['y']);


		//if id is number and the active token is not empty carry on
		if(is_numeric($memberID) && !empty($active)){

			//update users record set the active column to Yes where the memberID and active value match the ones provided in the array
		    $this->query("UPDATE User SET UserActive = 'Yes' WHERE UserID = :memberID AND UserActive = :active");

		    $this->bind(':memberID',$memberID);
		    $this->bind(':active',$active);

		    $this->execute();

		    //if the row was updated redirect the user
		    if($this->rowCount() == 1){

		        //redirect to login page
		        Messages::setMsg('Account activated.','success');
		        header('Location:'.ROOT_URL.'users/login');
		        return;

		    } else {
		    	Messages::setMsg('Your account could not be activated.','error');
		    	return;
		    }
		}
	}

}