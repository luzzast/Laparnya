<?php 
if ( !isset( $_SESSION ) )session_start();
require_once("connection/su_conn.php");

$option = $_POST['option'];

if($option == 'daftarsesibaru'){
    $username = $_POST['username'];
    $notel = $_POST['notel'];
    
    $results = $dbmysql->query("INSERT INTO sesi_tempahan (nama, tel) VALUES ('$username','$notel')");

    if($results){
            $newid = $dbmysql->insert_id;
            $_SESSION['iduser'] = $newid;
            $return_arr["username"] = $username;
            $return_arr["notel"] = $notel;
            $return_arr["newid"] = $newid;
            $return_arr["thestatus"] = "success";
    } else {
        $return_arr["thestatus"] = "failed";
    }
    
    echo json_encode($return_arr);
}
?>