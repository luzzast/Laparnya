<?php
require_once("../connection/su_conn.php");

$su_nama = $_POST['nama'];
$su_kategori_id = $_POST['kategori_id'];
$su_harga = $_POST['harga'];
$su_menuid = $_POST['menuid'];

//UPDATE MENU  
$sudo_query_update = "UPDATE menu SET nama = '$su_nama', kategori_id = '$su_kategori_id', harga = '$su_harga' WHERE id = $su_menuid";
$update_result = $dbmysql->query($sudo_query_update);

if ($update_result == 1)
    $return_arr["status"] = "success";
else
    $return_arr["status"] = "failed";



$return_arr["nama"] = $su_nama;
$return_arr["kategori_id"] = $su_kategori_id;
$return_arr["harga"] = $su_harga;
$return_arr["menuid"] = $su_menuid;
echo json_encode($return_arr);
?>