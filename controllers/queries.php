<?php
class Queries extends Controller{
	protected function Index(){
		if(!isset($_SESSION['is_logged_in'])){
			header('Location: '.ROOT_URL.'users/login');
		}
		$viewmodel = new QueryModel();
		$this->ReturnView($viewmodel->Index(),true);
	}

	protected function add(){
		if(!isset($_SESSION['is_logged_in'])){
			header('Location: '.ROOT_URL.'users/login');
		}
		$viewmodel = new QueryModel();
		$this->ReturnView($viewmodel->add(),true);
	}

	protected function browse(){
		if(!isset($_SESSION['is_logged_in'])){
			header('Location: '.ROOT_URL.'users/login');
		}
		$viewmodel = new QueryModel();
		$this->ReturnView($viewmodel->browse(),true);
	}


}