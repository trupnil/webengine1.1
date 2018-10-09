<?php

class Bootstrap
{
	public function __construct()
	{
		$tokan = explode('/',rtrim($_SERVER['REQUEST_URI'],'/')); 
		if (isset($tokan[3])) {
		$controller_name = ucfirst($tokan[3]);
        	
		}
		else
		{
			echo "Path Not Found!!";
		}

        
        

        if(file_exists('Controller/'.$controller_name.'.php'))
        {
        	require_once('Controller/'.$controller_name.'.php');
        	$controller = new $controller_name;

        	if (isset($tokan[3])) {

        		if (isset($tokan[4])) {

        			 $method = $tokan[4];

            if (isset($tokan[5])) {

            	$param = $tokan[5];
            	$controller->{$method}($param);	
            }
            else
            {
            	$controller->{$method}();
            }




       		}

       		else
       		{
       			echo "Method Not found!!";
       		}
           
            	
            
        	

        		
        	}
        	else
        	{
        		//default action
        		$controller->index();
        	}
        	

        }
        else
        {
        	require_once('Controller/Error.php');
        	$controller_name = "Errorcontroller";
        	$controller = new $controller_name;
        	$controller->index();
        }

    }
}

?>