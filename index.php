<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/bootstrap.css">
    <title>LaparNyaaa.com</title>
    <link rel="icon" type="images/home.png" href="/images/home.png">
</head>


<div class="card text-center">
    <div class="card-header border-dark p-1 mb-0 bg-info text-black">

        <!-- Link button home-->
        <nav class="navbar navbar-dark bg-info">
            <a class="navbar-brand" href="#">
                <!-- Button image link -->

                <img src="images/home.png" width="50" height="50" class="d-inline-block align-top" alt="">
                <b>HOME</b>
            </a>
        </nav>
    </div>
</div>

<body>
    <div class="row row-no-gutters">
        <div class="card text-center">
            <div class="card-footer p-3 mb-0 bg-info">
                <!-- <img src="images/Food Icon.png" class=" mh-100" style="width: 100px; height: 100px; " Max-height 100%> -->
                <b>HYE! WELCOME TO LaparNyaaa!😋</b>

            </div>
        </div>
        <div class=" row align-items-center">
            <div class="col">
                <img src="images/bcgrd.jfif" class=" mh-100" style="width: 400px; height: 400px; background-color: rgba(0,0,255,.1);" Max-height 100%>
            </div>

            <div class="col">
                <img src="images/kabu].jfif" class=" mh-100" style="width: 430px; height: 400px; background-color: rgba(0,0,255,.1);" Max-height 100%>
            </div>

            <div class="col">
                <img src="images/tomyam.jfif" class=" mh-100" style="width: 430px; height: 400px; background-color: rgba(0,0,255,.1);" Max-height 100%>
            </div>
        </div>
        <!-- /.Form for name, no tel and no table -->
        <div class="form-row align-items-center">

            <div class="col-auto my-1">

                <form name="form1" id="form1" action="javascript:hantar();" method="post">
                    <div class="form-group">
                        <label for="exampleInputName">Your Name</label>
                        <input type="text" class="form-control" id="username" name="username" aria-describedby="emailHelp" placeholder="Enter Your Name" required>

                    </div>

                    <div class="form-group">
                        <label for="exampleInputNoTel">No Tel</label>
                        <input type="text" class="form-control" id="notel" name="notel" placeholder="Enter Your No Tel" required>
                    </div>
                    <!--
                    <div class="form-row align-items-center">
                        <div class="col-auto my-1">
                            <label class="mr-sm-2" for="inlineFormCustomSelect">Table:</label>
                            <select class="custom-select mr-sm-2" id="inlineFormCustomSelect">
                                <option selected>Choose...</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>

                            </select> -->

                    <div id="loginstatus"></div>
                    <button type="submit" class="btn btn-primary"><b>Order Now!</b></button>
                </form>

                <div>
                    <div class="col-auto my-1">
                    </div>

                    <!-- /.End if Form for name, no tel and no table -->

                    <div class="card text-center">
                        <div class="card-footer p-3 mb-0 bg-info text-black">
                            <b>​©2022 by LaparNyaaa</b>
                        </div>
                    </div>

                    <script type="application/javascript" src="js/jquery-3.6.1.min.js"></script>
                    <script type="application/javascript" src="js/bootstrap.js"></script>
                    <!-- <script type="application/javascript" src="js/login.js"></script> -->
                    <script type="application/javascript" src="order.js"></script>
                </div>
            </div>
        </div>
</body>

</html>