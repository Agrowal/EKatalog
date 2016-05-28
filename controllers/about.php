<?php
class About extends Controller{
	protected function Index(){
		$viewmodel = new AboutModel();
		$this->ReturnView($viewmodel->Index(),true);
	}
}