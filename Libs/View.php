<?php
class View
{
	public function __construct()
	{
			//echo "view construct";
	}

	public function render($viewscript)
	{
		$page_name = $viewscript.".php";
	    include ($page_name);
	}


}

?>