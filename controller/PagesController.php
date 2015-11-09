<?php

/**
* 
*/
class PagesController extends Controller
{
	
	function view($id){
		$this->loadModel('Post');
		$d['page'] = $this->Post->findFirst(array(
			'conditions' => 'id='.$id
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
			'conditions' => array('online' =>1, 'type'=>'page')
		));
	}


}