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
			//GET TABLE
			if($this->table === false){
				$this->table =  strtolower(get_class($this)).'s';
			}

			//CONNECT TO  DATABASE
			$conf = Conf::$database[$this->db];
			if (isset(Model::$connexions[$this->db])){
				$this->dbconx = Model::$connexions[$this->db];
				return true; //DATABASE IS CONNECTED
			}
			try{
				$pdo =  new PDO('mysql:host='.$conf['host'].';dbname='.$conf['database'].';',
				 $conf['login'],
				 $conf['password']
				 //array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8')
				 );
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

		}


		/**
		*FUNCTION BIND VALUE
		*
		**/
		public function bind($param, $value, $type = null){
		    if (is_null($type)) {
		        switch (true) {
		            case is_int($value):
		                $type = PDO::PARAM_INT;
		                break;
		            case is_bool($value):
		                $type = PDO::PARAM_BOOL;
		                break;
		            case is_null($value):
		                $type = PDO::PARAM_NULL;
		                break;
		            default:
		                $type = PDO::PARAM_STR;
		        }
		    }
		    $this->stmt->bindValue($param, $value, $type);
		}

		/**
		*FUNCTION QUERY : TRANSFORM ARRAY TO QUERY 
		*@param $req['conditions'] : REQUEST CONDITIONS
		**/
		public function SelectAll($req){
			
			//Query select
		    $sql ='SELECT * FROM '.$this->table.' as ' .get_class($this).' ';
		   
		    //CONDITION CONSTRUCTION
	        if (isset($req['conditions'])) {
	        	$sql .='WHERE ';
 				 //if req is not an array : add 1 conditon
	            if (!is_array($req['conditions'])) {
	                $sql .=$req['conditions'];

	            }
	            //if is an array
	            else{
	                $cond=array();
	                foreach ($req['conditions'] as $k => $v) {
	                	//if si not numeric add slashes
	                    if (!is_numeric($v)) {
	                        $v='"'. addslashes($v).'"';
	                    }
	                    $cond[$k] = "$k=$v" ;
	                }
	                if(count($cond)>1){//Impload conditions with 'AND'
	                	$sql .= implode(' AND ', $cond);
	                }
	                else {//WHRITE SQL
	                	 $sql .=  $cond;
	                }
	            }
	        } 
		}


		/**
		*FUNCTION SELECT FROM DATABASE
		*@param $req  : REQUEST
		*@param $req['conditions'] : REQUEST CONDITIONS
		**/
		public function find($req) {
			
			$sql = $this->SelectAll($req);
	        $pre = $this->dbconx->prepare($sql);
	        $pre->execute();

	        return $pre->fetchAll(PDO::FETCH_OBJ);

	    }



	    public function debug($c){
			echo '<pre>';
			print_r($c);
			echo '</pre>';
	    }




	}