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
                        <a href="index.html"  style="color:#000;">Update Profile</a>
                    </li>
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

<div class="wrapper">
    <div class="container" id="update-alert">
        <div class="container">
            <div class="col-md-11 text-center">
            <h5><span class="glyphicon glyphicon-alert" id="alert"> </span>   Action Required! Update your bank account details.</h5>
            </div>
            
            <div class="col-md-11 text-center">
            <p>Please provide your accurate account details, as funds will be paid by other members to the account you provide.</p>
            </div>
        </div>

    </div>
    <div class="row">
        <div class="container" id="reg-pos">
            <div class="col-md-2"></div>
            <div class="col-md-8" id="reg-bck">
                <form class="form-horizontal">
                    
                <!--bank name-->
                  <div class="form-group">
                    <label for="bank-name" class="col-sm-3 control-label">Bank name:</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" placeholder="Bank name">
                    </div>
                  </div>
                
                <!--Account name-->
                  <div class="form-group">
                    <label for="acc-name" class="col-sm-3 control-label">Account name:</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" placeholder="Account name">
                    </div>
                  </div>
                 
                 <div class="form-group">
                     <label for="account-type" class="col-sm-3 control-label">Account type:</label>
                     <div class="col-sm-9">
                        <label class="checkbox-inline">
                          <input type="checkbox" value="option1"> Savings
                        </label>
                        <label class="checkbox-inline">
                          <input type="checkbox" value="option2"> Current
                        </label>
                     </div>
                 </div>
                    
               <!--Account number-->
                  <div class="form-group">
                    <label for="Account-number" class="col-sm-3 control-label">Account number:</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" placeholder="Account number">
                    </div>
                  </div>
                    
                    
                  <div class="form-group">
                    <div class="col-sm-offset-3 col-sm-9">
                      <button type="submit" class="btn btn-success">Update Bank Details</button>
                    </div>
                  </div>
                </form>
            </div>
            <div class="col-md-2"></div>
        </div>
    </div>
 </div>
    
    <footer class="footer">
        <p class="text-center">&copy; 2016 Gracify Media &#124; <a href="">Privacy Policy</a></p>
    </footer>
</body>
</html>