<?php
ini_set('error_reporting', E_STRICT);
if (!isset($_SESSION)) session_start();
?>
<!doctype html>
<html lang="en">

<head>
  <title>INCOMING</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- <link rel="stylesheet" href="../vendor/jquery-confirm/jquery-confirm.min.css"> -->

  <link rel="stylesheet" href="../css/bootstrap.min.css">

</head>

<body>
  <!-- START NAVIGATION BUTTON -->

  <div class="container">
    <nav class="navbar navbar-expand-lg bg-info">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">Admin Home</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item active">
              <a class="nav-link" href="logout.php">Log Out <span class="sr-only">(current)</span></a>
            </li>
          </ul>
        </div>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item active">
              <a class="nav-link" href="../admin/index_update.php">Add/Edit Menu<span class="sr-only">(current)</span></a>
            </li>
          </ul>
        </div>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item active">
              <a class="nav-link" href="../admin/indexdelete.php">Delete Menu <span class="sr-only">(current)</span></a>
            </li>
          </ul>
        </div>



        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item active">
              <a class="nav-link" href="logout.php">Edit Profile <span class="sr-only">(current)</span></a>
            </li>
          </ul>
        </div>

      </div>
    </nav>
  </div>

  <hr>
  <!-- END NAVIGATION BUTTON -->

  <section id="su_success_section" class="ftco-section">
    <div class="container-fluid">
      <div class="row justify-content-center">
        <div class="col-md-12 text-center mb-5">
          <div class="alert alert-primary" role="alert">
            <h2 class="heading-section">INCOMING ORDER</h2>
          </div>


        </div>
      </div>
      <div class="row justify-content-center">
        <div class="row">
          <div id="datalist" class="col">
            -none-
          </div>

        </div>
      </div>
    </div>
  </section>

  <script src="../js/jquery-3.6.1.min.js"></script>
  <script src="../js/bootstrap.min.js"></script>
  <script src="incoming.js"></script>

</body>

</html>