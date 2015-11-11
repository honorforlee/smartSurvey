<?php

/**
* 
*/
class PostsController extends Controller
{
	
	/**
	*FUNCTION INDEX : GET ALL POSTS
	**/
	function index(){
		$this->loadModel('Post');
		$d['posts'] = $this->Post->find(array(
			'conditions' => array('online'=> 1, 'type_page'=>'post')
		));
		$this->set($d);
	}

	/**
	*FUNCTION VIEW 
	*
	**/
	function view($id){
		$this->loadModel('Post');
		$d['posts'] = $this->Post->find(array(
			'conditions' => 'id='.$id
		));
		if(empty($d['posts'])){
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
			'conditions' => array('online' =>1, 'type_page'=>'post')
		));
	}




}