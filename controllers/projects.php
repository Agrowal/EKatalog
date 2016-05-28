<?php
class Projects extends Controller{
	protected function index(){
		if(!isset($_SESSION['is_logged_in'])){
			header('Location: '.ROOT_URL.'users/login');
		}
		$viewmodel = new ProjectModel();
		$this->ReturnView($viewmodel->index(),true);
	}

	protected function add(){
		if(!isset($_SESSION['is_logged_in'])){
			header('Location: '.ROOT_URL.'users/login');
		}
		$viewmodel = new ProjectModel();
		$this->ReturnView($viewmodel->add(),true);
	}

	protected function deleteProject(){
		if(!isset($_SESSION['is_logged_in'])){
			header('Location: '.ROOT_URL.'users/login');
		}
		$viewmodel = new ProjectModel();
		$viewmodel->deleteProject();
	}

	protected function edit(){
		if(!isset($_SESSION['is_logged_in'])){
			header('Location: '.ROOT_URL.'users/login');
		}
		$viewmodel = new ProjectModel();
		$this->ReturnView($viewmodel->edit(),true);
	}

	protected function deletePosition(){
		if(!isset($_SESSION['is_logged_in'])){
			header('Location: '.ROOT_URL.'users/login');
		}
		$viewmodel = new ProjectModel();
		$viewmodel->deletePosition();
	}

	protected function addPosition(){
		if(!isset($_SESSION['is_logged_in'])){
			header('Location: '.ROOT_URL.'users/login');
		}
		$viewmodel = new ProjectModel();
		$this->ReturnView($viewmodel->addPosition(),true);
	}

	protected function changeProjectName(){
		if(!isset($_SESSION['is_logged_in'])){
			header('Location: '.ROOT_URL.'users/login');
		}
		$viewmodel = new ProjectModel();
		$this->ReturnView($viewmodel->changeProjectName(),true);
	}





}