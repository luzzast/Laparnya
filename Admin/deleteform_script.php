<?php
require_once("../connection/su_conn.php");

$su_nama = $_POST['nama'];
$su_kategori_id = $_POST['kategori_id'];
$su_harga = $_POST['harga'];
$su_menuid = $_POST['menuid'];

//DELETE MENU  
$sudo_query_delete = "DELETE FROM menu WHERE id = $su_menuid";
$delete_result = $dbmysql->query($sudo_query_delete);

if ($delete_result == 1)
    $return_arr["status"] = "success";
else
    $return_arr["status"] = "failed";



$return_arr["nama"] = $su_nama;
$return_arr["kategori_id"] = $su_kategori_id;
$return_arr["harga"] = $su_harga;
$return_arr["menuid"] = $su_menuid;
echo json_encode($return_arr);
?>