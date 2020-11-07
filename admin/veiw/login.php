<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Mosaddek">
    <meta name="keyword" content="FlatLab, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
    <link rel="shortcut icon" href="../../public/admin/img/favicon.html">

    <title>FlatLab - Flat & Responsive Bootstrap Admin Template</title>

    <!-- Bootstrap core CSS -->
    <link href="../../public/admin/css/bootstrap.min.css" rel="stylesheet">
    <link href="../../public/admin/css/bootstrap-reset.css" rel="stylesheet">
    <!--external css-->
    <link href="../../public/admin/assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <!-- Custom styles for this template -->
    <link href="../../public/admin/css/style.css" rel="stylesheet">
    <link href="../../public/admin/css/style-responsive.css" rel="stylesheet" />
    <script src="../../public/admin/js/titanic.min.js"></script>
    <script src="../../public/admin/js/bodymovin.min.js"></script>
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 tooltipss and media queries -->
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
</head>

<body class="login-body">

    <div class="container">
        <!-- <img src="../../public/admin/img/lock4.png" width="150" height="150" alt="" class="academyitLogo" /> -->

   <div style="with:200px;height:200px" class="titanic titanic-unlock"></div>
        <form class="form-signin" action="../controler/Clogin.php" method="post">
            <h2 class="form-signin-heading">همین حالا وارد شوید</h2>
            <div class="login-wrap">
                <input type="text" class="form-control" placeholder="نام کاربری" name="frm[name]" autofocus>
                <input type="password" class="form-control" name="frm[password]" placeholder="کلمه عبور">
                <label class="checkbox">
                    <input type="checkbox" value="remember-me"> مرا به خاطر بسپار
                    <span class="pull-right"> <a href="#"> کلمه عبور را فراموش کرده اید؟</a></span>
                </label>
                <input class="btn btn-lg btn-login btn-block" type="submit" name="btn" value="login" />
            </div>

        </form>

    </div>

    <script>
        var titanic = new Titanic('https://rawgit.com/icons8/titanic/master/src/icons/');
    </script>
</body>

</html>