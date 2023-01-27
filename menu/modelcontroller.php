<?php
require_once("../connection/su_conn.php");
$iduser = $_SESSION['iduser'];

$option = $_POST['option'];

if ($option == 'updateaddmenutempahan') {
    $idmakanan = $_POST['idmakanan'];
    $iduser = $_POST['iduser'];
    // $idnama = $_POST['idnama'];
    // $idharga = $_POST['idharga'];

    $result = $dbmysql->query("INSERT INTO menutempahan (sesi_id, menu_id) VALUES ($iduser, $idmakanan)");
    if ($result) {
        $return_arr["thestatus"] = "success";
        echo json_encode($return_arr);
    }
}

if ($option == 'deleteaddmenutempahan') {
    $idmakanan = $_POST['idmakanan'];
    $iduser = $_POST['iduser'];


    $result = $dbmysql->query("DELETE FROM menutempahan WHERE menu_id=$idmakanan && sesi_id=$iduser LIMIT 1");
    if ($result) {
        $return_arr["thestatus"] = "success";
        echo json_encode($return_arr);
    }
}

if ($option == 'updatetable') {
    $id = $_POST['idtempahan'];
    $nomeja = $_POST['nomeja'];

    $result = $dbmysql->query("UPDATE sesi_tempahan SET nomeja = $nomeja WHERE id = $id");
    if ($result) {
        $return_arr["thestatus"] = "success";
        echo json_encode($return_arr);
    }
}
