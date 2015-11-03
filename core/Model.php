<?php 

	/**
	* CLASS MODEL
	*/
	class Model
	{
		static $connexions = array();
		public $db = 'default';

		public function __construct()
		{
			$conf = Conf::$database[$this->db];
			if (isset(Model::$connexions[$this->db])){
				return true; //DATABASE IS CONNECTED
			}
			try{
				$pdo =  new PDO('mysql:host='.$conf['host'].';dbname='.$conf['database'].';', $conf['login'], $conf['password']);
				Model::$connexions[$this->db] = $pdo;
			}
			catch(PDOException $e){
				if(Conf::$debug>=1){
					die($e->getMessage());
				}else {
					die('Impossible to connect to database');
				}

				
			}
		}
		public function find() {

		}

	}