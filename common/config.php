<?php
require_once "koneksi/conn.php";
$db = new mysqli($db_host, $db_user, $db_pass, $db_name);

// //acak
// function acak($panjang)
// {
// 	$karakter 	= rand('000000000,999999999');
// 	$string 	= '';
// 	for ($i = 0; $i < $panjang; $i++) {
// 		$pos = rand(0, strlen($karakter) - 1);
// 		$string .= $karakter{
// 			$pos};
// 	}

// 	return $string;
// }

//protecsi
function anti_xss($d)
{
	$f = stripslashes(strip_tags(htmlspecialchars($d, ENT_QUOTES)));
	return $f;
}