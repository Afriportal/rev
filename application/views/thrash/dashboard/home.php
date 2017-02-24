<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="">
        <meta name="robots" content="">
        
        <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">

        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="style.css" />
        <link rel="stylesheet" href="css/rev.css">
       
        
        <script src="js/jquery.min.js"></script>        
        <script src="js/bootstrap.min.js"></script>
        <script src="js/rev.js"></script>

        <link rel="shortcut icon" href="">
    </head>
    
<body>

     <!-- Navigation -->
    <nav class="navbar navbar-inverse" role="navigation" id="navigate">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html"><img src="images/logo.png" /></a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="about.html" style="color:#000;">{{ email }}</a>
                    </li>
                    <li>
                        <a href="Contact-us.php" style="color:#000;">Contact Us</a>
                    </li>

                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
    
    <div class="container">
        <div class="col-sm-2"></div>
            <div class="col-sm-8" id="dash">
                <div class="col-sm-12">
                <h5 class="text-center"><span class="glyphicon glyphicon-edit" id="action"> </span>   Action Required! Your account is almost ready.</h5>
                </div>
                <div class="col-sm-6" id="padd">
                    <p>Fill out your bank information in order to be eligible to receive payments from other members</p>
                </div>
                <div class="col-sm-6" id="padd">
                    <p>After you fill out your account information, you can start making and receiving payments</p>
                </div>
    
                    <div class="col-sm-12">
                        <div class="col-sm-4"></div>
                        <div class="col-sm-4">
                            <p><a href="update-account.php" type="button" class="btn btn-danger btn-block">Add Bank Details</a></p>
                        </div>
                        <div class="col-sm-4"></div>
                    </div>
            </div>
        <div class="col-sm-2"></div>
    </div>

    
    <footer class="footer">
        <p class="text-center">&copy; 2016 Gracify Media &#124; <a href="">Privacy Policy</a></p>
    </footer>
</body>
</html>