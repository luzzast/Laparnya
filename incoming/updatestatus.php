<?php 
require_once("../connection/su_conn.php");
// ini_set('error_reporting', E_STRICT);
$updateid = $_POST['updateid'];
$option = $_POST['option'];

if($option == 'complete')
$result = $dbmysql->query( "UPDATE sesi_tempahan SET status = 2 WHERE id = $updateid" );
else if($option == 'prepare')
$result = $dbmysql->query( "UPDATE sesi_tempahan SET status = 1 WHERE id = $updateid" );

// echo $updateid."<br>";
// echo $option;
?>