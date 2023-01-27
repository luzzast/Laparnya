<?php
ini_set('error_reporting', E_STRICT);
if (!isset($_SESSION)) session_start();

$iduser = $_SESSION['iduser'];
if ($iduser == "") die("--No ID--");
?>

<!doctype html>
<html lang="en">

<head>
    <title>MENU</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- <link rel="stylesheet" href="../vendor/jquery-confirm/jquery-confirm.min.css"> -->

    <link rel="stylesheet" href="../css/bootstrap.min.css">
</head>

<body>
    <section id="su_success_section" class="ftco-section">

        <div class="card text-center">
            <div class="card-footer p-1 mb-0 bg-info">
                <img src="/LaparNyaaa/Images/Food Icon.png" class=" mh-100" style="width: 100px; height: 100px; " Max-height 100%>
                <b>HYE! WELCOME TO LaparNyaaa!😋</b>

            </div>
        </div>
        <hr>
        <!--
        <div class="text-center">
            <div class="col">
                <?php echo $sesi_tempahan->nama; ?>
            </div>
        </div>
        -->
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-md-12 text-center mb-1.2">
                    <div class="alert alert-primary" role="alert">
                        <h2 class="heading-section">SELERA PANTAI TIMUR STALL</h2>

                    </div>
                </div>
            </div>
            <div class="text-center">
                <div class="col">
                    <img src="/LaparNyaaa/Images/patatimo.png">
                </div>
            </div>
            <!-- start BACKGROUD PICTURES 
            <div class="card bg-dark text-white">
                <img class="card-img" src="images/kachitable.jpg" alt="Card image" class=" mh-100" style="width: 100px; height: 100px; " Max-height 100%>
                <div class="card-img-overlay">  

                </div>
            </div>
             end BACKGROUD PICTURES -->

            <div class="row justify-content-center">

                <div class="row">
                    <div class="col">
                        <div class="alert alert-primary" role="alert">
                            <b> List of Menu </b>
                        </div>
                    </div>
                </div>

                <?php foreach ($nameresults as $data) ?>
                <?php echo $data->sesi_tempahan; ?>


                <!-- data list menu  -->
                <div class="row">
                    <div id="datalistmenu" class="col">
                        -none-
                    </div>
                </div>
                <!-- end data list menu  -->
                <hr>

                <div class="row">
                    <div class="col">
                        <div class=" alert alert-primary" role="alert">
                            <img src="/LaparNyaaa/Images/cart.png" class=" mh-15" style="width: 3%">
                            <b>Your Order</b>
                        </div>
                    </div>
                </div>


                <!-- data cart list menu  -->

                <div id="datalistcart">
                    -none-
                </div>

                <div class="row justify-content-center">
                    <div class="col">
                        <select class="custom-select mr-sm-2" id="tableno" name="tableno" required>
                            <option selected>Choose Table No.</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>

                        </select>
                        <button onclick="updatetable(<?php echo $iduser; ?>);" type="button" class="btn btn-primary">UPDATE</button>
                    </div>
                </div>
                <!-- end data cart list menu  -->
                <hr>
                <a href="receipt.php" class="btn btn-primary" role="button" data-bs-toggle="button">CONFIRM ORDER</a>
                <!-- <button href="..menu/receipt.php" type="button" class="btn btn-primary btn-lg">CONFIRM ORDER</button> -->
            </div>
        </div>

    </section>
    <hr>
    </div>
    <div class="card text-center">
        <div class="card-header p-3 mb-0 bg-info text-black">
            <b>​©2022 by LaparNyaaa</b>
        </div>
    </div>
    <script src="../js/jquery-3.6.1.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="menu.js"></script>
    <script src="cartmenu.js"></script>

</body>

</html>