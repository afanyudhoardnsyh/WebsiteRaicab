<?php
error_reporting(0);
$db_host 				= 'localhost'; 
$db_user 				= 'root'; 
$db_pass 				= ''; 
$db_name 				= 'cobadulu'; 
$defaulturl 			= "http://localhost/login_raicab/";
$urladmin 				= "http://localhost/oshs/admin/"; 
$koneksi 				= new mysqli($db_host, $db_user, $db_pass, $db_name);
if ($koneksi->connect_error) {
	echo "Koneksi Gagal" . $connect_error();
}

$ip      	= $_SERVER['REMOTE_ADDR'];
$geturl		= $_SERVER["REQUEST_URI"];
$pageurl1	= explode("/", $geturl);
$urlok		= $pageurl1[2] . "/" . $pageurl1[3];
$path1		= $pageurl1[2];
$path2		= $pageurl1[3];
$path3		= $pageurl1[4];
$path4		= $pageurl1[5];
$path5		= $pageurl1[6];
$path6		= $pageurl1[7];
