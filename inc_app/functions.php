<?php


$url =  realpath(dirname(__FILE__));


//Function to connect to db
function connectDb(){
	Global $url;
	require_once ($url.'/connect-to-db.php');
}

//function unique id
function uniqueId(){
	// generate unique string
	echo md5(time() . mt_rand(1,1000000));
}

//function test mail 
function is_valid_email($email, $test_mx = false) {  
    if(eregi("^([_a-z0-9-]+)(\.[_a-z0-9-]+)*@([a-z0-9-]+)(\.[a-z0-9-]+)*(\.[a-z]{2,4})$", $email))  
        if($test_mx)  
        {  
            list($username, $domain) = split("@", $email);  
            return getmxrr($domain, $mxrecords);  
        }  
        else  
            return true;  
    else  
        return false;  
}  

//function get ip adress
function getRealIpAddr()  {  
    if (!emptyempty($_SERVER['HTTP_CLIENT_IP']))  
    {  
        $ip=$_SERVER['HTTP_CLIENT_IP'];  
    }  
    elseif (!emptyempty($_SERVER['HTTP_X_FORWARDED_FOR']))  
    //to check ip is pass from proxy  
    {  
        $ip=$_SERVER['HTTP_X_FORWARDED_FOR'];  
    }  
    else  
    {  
        $ip=$_SERVER['REMOTE_ADDR'];  
    }  
    return $ip;  
}  



/********************** 
*@file - path to zip file 
*@destination - destination directory for unzipped files 
*/  
function unzip_file($file, $destination){  
    // create object  
    $zip = new ZipArchive() ;  
    // open archive  
    if ($zip->open($file) !== TRUE) {  
        die ("Could not open archive");  
    }  
    // extract contents to destination directory  
    $zip->extractTo($destination);  
    // close archive  
    $zip->close();  
    echo 'Archive extracted to directory';  
}  


/********************** 
*@filename - path to the image 
*@tmpname - temporary path to thumbnail 
*@xmax - max width 
*@ymax - max height 
*/  
function resize_image($filename, $tmpname, $xmax, $ymax)  
{  
    $ext = explode(".", $filename);  
    $ext = $ext[count($ext)-1];  
  
    if($ext == "jpg" || $ext == "jpeg")  
        $im = imagecreatefromjpeg($tmpname);  
    elseif($ext == "png")  
        $im = imagecreatefrompng($tmpname);  
    elseif($ext == "gif")  
        $im = imagecreatefromgif($tmpname);  
      
    $x = imagesx($im);  
    $y = imagesy($im);  
      
    if($x <= $xmax && $y <= $ymax)  
        return $im;  
  
    if($x >= $y) {  
        $newx = $xmax;  
        $newy = $newx * $y / $x;  
    }  
    else {  
        $newy = $ymax;  
        $newx = $x / $y * $newy;  
    }  
      
    $im2 = imagecreatetruecolor($newx, $newy);  
    imagecopyresized($im2, $im, 0, 0, 0, 0, floor($newx), floor($newy), $x, $y);  
    return $im2;   
}  

//function check date
function checkDateFormat($date){
    //match the format of the date
    if (preg_match ("/^([0-9]{4})-([0-9]{2})-([0-9]{2})$/", $date, $parts))
    {
        //check weather the date is valid of not
        if(checkdate($parts[2],$parts[3],$parts[1]))
            return true;
        else
        return false;
    }
    else
        return false;
}

function substrText($text, $max) {
    if (strlen($text) >= $max) {
        //     $text = ereg_replace("<[^>]*>", "", $text);
        $text = substr($text, 0, $max);
        $positionEspace = strrpos($text, " ");
        $text = substr($text, 0, $positionEspace) . "...";
    }
    return $text;
}
