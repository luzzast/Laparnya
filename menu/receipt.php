<?php
ini_set('error_reporting', E_STRICT);
if (!isset($_SESSION)) session_start();
$iduser = $_SESSION['iduser'];
if ($iduser == "") die("--No ID--");
?>

<!doctype html>
<html lang="en">

<div class="card text-center">
    <div class="card text-center">
        <div class="card-footer p-4 mb-0 bg-info">
            <!-- <img src="/LaparNyaaa/Images/Food Icon.png" class=" mh-100" style="width: 100px; height: 100px; " Max-height 100%> -->
            <b>HYE! WELCOME TO LaparNyaaa!😋</b>

        </div>
    </div>
</div>

<head>
    <title>RECEIPT PAGE</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- <link rel="stylesheet" href="../vendor/jquery-confirm/jquery-confirm.min.css"> -->

    <link rel="stylesheet" href="../css/bootstrap.min.css">

</head>

<body>


    <!-- END NAVIGATION BUTTON -->

    <section id="su_success_section" class="ftco-section">
        <div class="container-fluid">


            <div class="text-center">
                <div class="col">
                    <img src="/LaparNyaaa/Images/patatimo.png">
                </div>
            </div>
            <hr>
            <div class="row justify-content-center">
                <div class="col-md-12 text-center mb-5">
                    <div class="alert alert-primary" role="alert">
                        <h2 class="heading-section">RECEIPT PAGE</h2>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="row">
                    <div id="receiptlist" class="col">
                        -none-
                    </div>

                </div>
            </div>

        </div>
    </section>
    <hr>
    <div class="row justify-content-center">
        <div class="row">
            <div id="customernamelist" class="col">
                -none-
            </div>

        </div>
    </div>
    <div class="card text-center">
        <b> Please pay at the counter. Thank You!</b>
        <hr>
    </div>
    <div class="card text-center">
        <div class="card-header p-3 mb-0 bg-info text-black">
            <b>​©2022 by LaparNyaaa</b>
        </div>
    </div>

    <script src="../js/jquery-3.6.1.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="receipt.js"></script>
    <script src="detail.js"></script>

</body>

</html>