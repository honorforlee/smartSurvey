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
	function __construct($request = null){
		if($request){
			$this->request = $request; //insatnce request
		}
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
	*@param $name : MODEL NAME
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

	/**
	*REQUEST : load controller and call action
	*@param $controller : controller to call
	*@param $action     : action to call
	**/
	function request($controller, $action){
		$controller .= 'Controller';
		require_once WEBROOT.DS.'controller'.DS.$controller.'.php';
		$c = new $controller();
		return $c->$action();
	}

	/**
	*ERRORS 404 
	**/
	function e404($message){
		header("HTTP/1.0 404 Not Found");
		$this->set('msg', $message);
		$this->render('/errors/404');
	}

	/**
	*FUNCTION SUBSTR
	*@param  $p : paragraphe
	*@param  $nbr : length to display
	**/
	function getLines($p, $nbr){
		return substr($p, 0, $nbr); 
	}

	
    public function debug($c){
		echo '<pre>';
		print_r($c);
		echo '</pre>';
    }

}

?>