<?php
if (!isset($_SESSION)) session_start();
require_once("connection/su_conn.php");

if (mysqli_connect_errno()) {
    die("Failed to connect to MySQL: " . mysqli_connect_error());
}


$username = $_POST['username'];
$password = $_POST['password'];

if (isset($_POST['username']) && isset($_POST['password'])) {


    $results = $dbmysql->query("SELECT * FROM users WHERE username='admin' AND password='123'");
    $results = mysqli_query($conn, $query);
    if ($mysqli_num_rows($result) > 0)  {
        //$newid = $dbmysql->insert_id;
        //$_SESSION['iduser'] = $newid;
        $return_arr["username"] = $username;
        $return_arr["password"] = $password;
        //$return_arr["newid"] = $newid;
        $return_arr["thestatus"] = "success";
    } else {
        $return_arr["thestatus"] = "failed";
    }

    echo json_encode($return_arr);
}
