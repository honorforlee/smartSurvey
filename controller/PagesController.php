<?php

/**
* 
*/
class PagesController extends Controller
{

	/**
	*FUNCTION INDEX
	**/
	function index(){
		$this->loadModel('Post');
		$d['pages'] = $this->Post->find(array(
			'conditions' => array('online'=> 1, 'type_page'=>'page')
		));
		$this->set($d);
	}

	/**
	*FUNCTION VIEW 
	*@param $id : get from the url param
	**/
	function view($id){
		$this->loadModel('Post');
		$d['page'] = $this->Post->find(array(
			'conditions' =>  array('id'=>$id, 'type_page'=>'page', 'online'=> 1)
		));
		if(empty($d['page'])){
			$this->e404('Page introuvable');
		}

		$this->set($d);
	}


	/**
	*ALLOW TO GET ALL PAGES ON MENU
	**/
	function getMenu(){
		$this->loadModel('Post');
		return $this->Post->find(array(
			'conditions' => array('online' =>1, 'type_page'=>'page')
		));
	}


}