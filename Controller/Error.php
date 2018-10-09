<?php
require_once 'Libs/Controller.php';

class Errorcontroller extends Controller
{
	public function index()
	{
		//echo "404 page not found";
		 $this->view->render('view/error/index');
	}
}

?>