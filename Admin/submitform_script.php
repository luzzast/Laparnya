<?php
require_once("../connection/su_conn.php");

$su_nama = $_POST['nama'];
$su_kategori_id = $_POST['kategori_id'];
$su_harga = $_POST['harga'];

//INSERT MENU
$sudo_query_insert = "INSERT INTO menu (nama, kategori_id, harga) VALUES ('$su_nama','$su_kategori_id','$su_harga')";
$insert_result = $dbmysql->query($sudo_query_insert);

if ($insert_result == 1)
$return_arr["status"] = "success";
else
$return_arr["status"] = "failed";



$return_arr["nama"] = $su_nama;
$return_arr["kategori_id"] = $su_kategori_id;
$return_arr["harga"] = $su_harga;
echo json_encode($return_arr);  

?>