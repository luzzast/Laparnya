<!DOCTYPE html>
<html>

<head>
    <title>ADMIN</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- <link rel="stylesheet" href="../vendor/jquery-confirm/jquery-confirm.min.css"> -->

    <link rel="stylesheet" href="../css/bootstrap.min.css">

</head>
<div class="card text-center">
    <div class="card-footer p-3 mb-0 bg-info">
        <!-- <img src="images/Food Icon.png" class=" mh-100" style="width: 100px; height: 100px; " Max-height 100%> -->
        <b>HYE! WELCOME TO LAPARNYAA!😋</b>

    </div>
</div>
<div class="row justify-content-center">
    <div class="col-md-12 text-center mb-5">
        <div class="alert alert-primary" role="alert">
            <h2 class="heading-section">WELCOME ADMIN </h2>
        </div>
    </div>
</div>
<p class="text-center"><b>Please Login.</b></p>

<body>
    <div class="row row-no-gutters">
        <div class="form-row align-items-center">
            <div class="col-auto my-1">

                <form id="login-form" method="post">
                    <label for="username">Username:</label><br>
                    <input type="text" id="username" name="username" required><br>
                    <label for="password">Password:</label><br>
                    <input type="password" id="password" name="password" required><br><br>
                    <input type="submit" value="Submit" onclick="submitForm()">
                </form>
            </div>
        </div>

        <div>
            <div class="col-auto my-1">
            </div>

            <!-- /.End if Form for name, no tel and no table -->


            <nav class="navbar-center p-2 mb-0 fixed-bottom bg-info">

                <p class="text-center"><b>​©2022 by LaparNyaaa.</b></p>

            </nav>

            <script type="application/javascript" src="js/jquery-3.6.1.min.js"></script>
            <script type="application/javascript" src="js/bootstrap.js"></script>
            <!-- <script type="application/javascript" src="js/login.js"></script> -->
            <!-- <script src="/js/login.js"></script> -->
            <script src="login.js"></script>

        </div>
    </div>
</body>

</html>