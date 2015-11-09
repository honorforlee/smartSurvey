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
		*FUNCTION SELECT FROM DATABASE
		*@param $req  : REQUEST
		*@param $req['conditions'] : REQUEST CONDITIONS
		*@param table : IF IS NOT SET (PLURAL OF THE MODEL NAME)
		**/
		public function find($req) {
			
		    $sql ='SELECT * FROM '.$this->table.' as ' .get_class($this).' ';

		    //CONDITION CONSTRUCTION
	        if (isset($req['conditions'])) {
	        	$sql.='WHERE ';

	            if (!is_array($req['conditions'])) {
	                $sql .=$req['conditions'];
	            }else{
	                $cond=array();
	                foreach ($req['conditions'] as $k => $v) {
	                    if (!is_numeric($v)) {
	                        $v='"'. addslashes($v).'"';
	                    }

	                    $cond = "$k=$v";
	                }
	                if(count($cond)>1){
 						$sql .= implode(' AND ', $cond);
	                }
	                else {
	                	 $sql .=  $cond;
	                }
	              
	            }
	        }
	        $pre =$this->dbconx->prepare($sql);
	        $pre->execute();

	        return $pre->fetchAll(PDO::FETCH_OBJ);

	    }

	    public function findFirst($req){
	    	return current ($this->find($req));
	    }

	    public function debug($c){
			echo '<pre>';
			print_r($c);
			echo '</pre>';
	    }



	}