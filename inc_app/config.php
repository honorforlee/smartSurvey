<?php


//Server host 
$acc="";

//App path



	
if ($acc=='ftp') {
	//DB configuration Constants
  define('_HOST_NAME_', ' ');
  define('_USER_NAME_', ' ');
  define('_DB_PASSWORD', ' ');
  define('_DATABASE_NAME_', ' ');
}
else {
	//DB configuration Constants
	define('_HOST_NAME_', 'localhost');
	define('_USER_NAME_', 'root');
	define('_DB_PASSWORD', 'root');
	define('_DATABASE_NAME_', 'smart_survey');
}
	
	

