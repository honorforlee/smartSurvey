<?php 

	/**
	* CLASS MODEL
	*/
	class Model
	{
		static $connexions = array();
		public $db = 'default';
		public $table = false;
		public $dbconx ;

		public function __construct()
		{	
			//CONNECT TO  DATABASE
			$conf = Conf::$database[$this->db];
			if (isset(Model::$connexions[$this->db])){
				$this->dbconx = Model::$connexions[$this->db];
				return true; //DATABASE IS CONNECTED
			}
			try{
				$pdo =  new PDO('mysql:host='.$conf['host'].';dbname='.$conf['database'].';', $conf['login'], $conf['password']);
				Model::$connexions[$this->db] = $pdo;
				$this->dbconx= $pdo;
				//echo 'success connexions';
			}
			catch(PDOException $e){
				if(Conf::$debug>=1){
					die($e->getMessage());
				}else {
					die('Impossible to connect to database');
				}

				
			}
			//GET TABLE
			if($this->table === false){
				$this->table =  strtolower(get_class($this)).'s';
			}
		}
		public function find($req) {
			
		    $sql ='SELECT *FROM '.$this->table.' as ' .get_class($this).' ';
	        if (isset($req['conditions'])) {
	            $sql.='WHERE ';
	            if (!is_array($req['conditions'])) {
	                $sql.=$req['conditons'];
	            }else{
	                $cond=array();
	                foreach ($req['conditions'] as $k => $v) {
	                    if (!is_numeric($v)) {
	                        $v='"'.mysql_escape_string($v).'"';
	                    }


	                    $cond = "$k=$v";
	                }
	                $sql.= implode (' AND ', $cond);
	            }
	        }
	        $pre =$this->dbconx->prepare($sql);
	        $pre->execute();
	        return $pre->fetchAll(PDO::FETCH_OBJ);

	    }

	    public function findFirst($re){
	    	
	    }



	}