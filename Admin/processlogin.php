 <?php

    require_once("connection/su_conn.php");

    $su_username = $_POST['su_username'];
    $su_password = $_POST['su_password'];

    $return_arr["inputusername"] = $su_username;
    $return_arr["inputpassword"] = $su_password;

    $loginquery = "SELECT * FROM adminlogin WHERE username = '$su_username' AND password = '$su_password'";
    $rowresult = $dbmysql->get_row($loginquery);
    $totalfound = $dbmysql->num_rows;

    if ($totalfound > 0) {
        $return_arr["loginstatus"] = "success";
    }
    else {
        $return_arr["loginstatus"] = "failed";

    }


    echo json_encode($return_arr);
    ?>


 <!-- // to prevent mysql injection

// $username = stripcslashes($username);
// $password = stripcslashes($password);
// $username = mysqli_real_escape_string($username);
// $username = mysqli_real_escape_string($password);


//connect to server and

// mysqli_connect("localhost", "root", "");
// mysqli_select_db("login");

//query database
// $result = mysqli_query("SELECT * FROM adminlogin WHERE username = '$username' AND PASSWORD = '$password'")
//                 or die("Failed to query database ".mysqli_error());
//  $row = mysqli_fetch_array($result); -->