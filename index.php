<?php
// Start Session
session_start();

// Include Config
require('config.php');

require('classes/Messages.php');
require('classes/Bootstrap.php');
require('classes/Controller.php');
require('classes/Model.php');
require('classes/phpmailer/mail.php');

require('controllers/home.php');
require('controllers/queries.php');
require('controllers/users.php');
require('controllers/about.php');
require('controllers/contact.php');
require('controllers/projects.php');

require('models/home.php');
require('models/query.php');
require('models/user.php');
require('models/about.php');
require('models/contact.php');
require('models/project.php');

$bootstrap = new Bootstrap($_GET);
$controller = $bootstrap->createController();
if($controller){
	$controller->executeAction();
}