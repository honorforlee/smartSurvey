<?php 
/**
* 
*/
class Request{

	public $url; //URL CALLED BY USER
	
	function __construct()	{
		$this->url= $_SERVER['PATH_INFO'];
	}
}