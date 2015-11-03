<?php 

/**
* 
*/
class Controller
{
	public  $request;
	public  $layout = 'default';
	private $vars = array();
	private $rendered = false;
	
	/**
	*CONSTRUCT
	*@param $request : obeject
	**/
	function __construct($request){
		$this->request = $request;
	}

	/**
	*RENDER A VIEW
	*@param $view FILE TO RENDER 
	**/
	public function render($view){
		if($this->rendered){
			return false;
		}
		extract($this->vars);

		if(strpos($view, '/')===0){
		//IF IS AN ERROR CALL ERROR PAGE
			 $view = WEBROOT.DS.'view'.DS.$view.'.php';
		}
		else{
		//ELSE CALL CONTROLLER 
			$view = WEBROOT.DS.'view'.DS.$this->request->controller.DS.$view.'.php';
		}

		ob_start();
		require $view;
		$content_for_layout = ob_get_clean();
		require WEBROOT.DS.'view'.DS.'layout'.DS.$this->layout.'.php';
		$this->rendered = true;
	}


	/**
	*ALOW TO SEND MORE THAN ONE VARIABLE TO THE VIEW
	*@param $key : THE NAME OF THE VARIABLE OR TABLE
	*@param $value : VARIABLE VALUE
	**/
	public function set($key, $value=null){
		if(is_array($key)){
			$this->vars += $key;
		}
		else {
			$this->vars[$key] = $value;
		}
	}

	/**
	*ALLOW TO LOAD MODEL
	*
	**/
	function loadModel($name){
		$file = WEBROOT.DS.'model'.DS.$name.'.php';
		require_once($file);
		if(!isset($this->$name)){
			$this->$name = new $name();
		}else {
			echo 'Did not loaded';
		}
		
	}

}

?>