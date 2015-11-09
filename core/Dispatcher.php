<?php

/**
* 
*/
class Dispatcher{
	
	var $request;

	function __construct(){

		$this->request = new Request();
		Rooter::parse($this->request->url, $this->request);
		$controller = $this->loadController();
		
		//IF ACTION DOES NOT EXIST WRITE ERROR
		if(!in_array($this->request->action, array_diff(get_class_methods($controller), get_class_methods('Controller')) )){
			$this->error('The controller'. $this->request->controller. 'has not a method named ' . $this->request->action );
		}
		else {//ELSE CALL ACTION AND PARAMS
			call_user_func_array(array($controller , $this->request->action) ,$this->request->params );
			$controller->render($this->request->action);
		}

	}

	//FUNCTION ERROR 404 NOT FOUND
	function error($msg){
		$controller = new Controller($this->request);
		$controller->e404($message);
	}

	function loadController(){	
		$name = ucfirst($this->request->controller).'Controller';
		$file = WEBROOT.DS.'controller'.DS.$name.'.php';
		require $file;
		return new $name($this->request);
	}
}