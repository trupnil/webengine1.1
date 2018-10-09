<?php
require_once 'Libs/Controller.php';

class Welcome extends Controller
{
	public function __construct()
	{
		//echo "This is welcome page of welcome controller";
		parent::__construct();

	}

	public function home()
	{
	  $this->view->render('View/login');
	}

	
}


?>