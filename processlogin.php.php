<?php
$su_username = $_POST["su_username"];
$su_Notel = $_POST["su_Notel"];

$return_arr["inputusername"] = $su_username;
$return_arr["inputNotel"] = $su_Notel;

$return_arr["loginstatus"] = "success";
echo json_encode($return_arr);
?>  