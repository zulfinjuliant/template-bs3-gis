<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login App GIS</title>
    
    <!-- css -->
    <link rel="stylesheet" type="text/css" href="assets/css/boot.css">
    <link rel="stylesheet" type="text/css" href="assets/css/plus.css">
    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css">
    <link rel="stylesheet" type="text/css" href="assets/css/animate.css">
    
</head>
<body align="center" style="margin-top:150px;">
    <div class="container">
        <div class="row vertical-offset-100">
            <div class="col-md-4 col-md-offset-4">
                <div class="panel panel-info animated bounceInUp">
                    <div class="panel-heading">
                        <div class="row-fluid user-row"><i class="fa fa-user"></i> Login User</div>
                    </div>
                    <div class="panel-body">
                        <form name="login">
                            <div class="form-group">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                    <input class="form-control" placeholder="usernamenya adalah admin" type="text" name="username">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                                    <input class="form-control" placeholder="passwordnya adalah root" type="password" name="password">
                                </div>
                            </div>
                            <button type="button" class="btn btn-success btn-block" value="Login" onClick="Login()">
                                <i class="fa fa-sign-in"></i> Masuk Aplikasi</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- js -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/bootstrap.js"></script>
        <script src="assets/js/control.js"></script>
    </body>
    </html>