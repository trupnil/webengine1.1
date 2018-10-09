<?php
require_once 'Libs/view.php';

Class Controller
{
	public $view;
	public function __construct()
	{
		$this->view = new view();
	}

	public function index()
	{
		echo "This is default";
	}
}

?>