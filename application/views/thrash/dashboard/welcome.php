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
                        <a href="index.html"  style="color:#000;">Hi {{John Doe}}</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
    
<div class="wrapper">
    <div class="container">
        <div class="col-md-8" id="acc-nav">
            <ul class="nav nav-tabs">
              <li role="presentation" class="active"><a href="welcome.php">Latest Transactions</a></li>
              <li role="presentation"><a href="sent-payment.php">Sent Payments</a></li>
              <li role="presentation"><a href="received-payments.php">Received Payments</a></li>
            </ul>
        </div>
        <div class="col-md-4">
        </div>
    </div>
    
    <div class="container">
        <div class="col-md-8" id="views">
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Location</th>
                            <th>Status</th>
                            <th>Amount</th>
                        </tr>
                    </thead>

                    <tbody>
                        <tr>
                            <td>Johnson Obukohwo</td>
                            <td>john-doe@gmail.com</td>
                            <td>08066454490</td>
                            <td>Ibadan</td>
                            <td>Paid</td>
                            <td class="text-danger"><strong>5k</strong></td>
                        </tr>
                        <tr>
                            <td>Johnson Obukohwo</td>
                            <td>john-doe@gmail.com</td>
                            <td>08066454490</td>
                            <td>Delta</td>
                            <td>Received</td>
                            <td class="text-success"><strong>10k</strong></td>
                        </tr>
                        <tr>
                            <td>Johnson Obukohwo</td>
                            <td>john-doe@gmail.com</td>
                            <td>08066454490</td>
                            <td>Ibadan</td>
                            <td>Paid</td>
                            <td class="text-danger"><strong>10k</strong></td>
                        </tr>
                        <tr>
                            <td>Johnson Obukohwo</td>
                            <td>john-doe@gmail.com</td>
                            <td>08066454490</td>
                            <td>Delta</td>
                            <td>Received</td>
                            <td class="text-success"><strong>20k</strong></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="col-md-1">
        </div>
        <div class="col-md-3" id="views">
            <h5><strong>Select your package</strong></h5><hr>
            <div class="radio">
              <label>
                <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>
                5,000 <strong>(Donate 5k, get 10k)</strong>
              </label>
            </div>
            <div class="radio">
              <label>
                <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
                10,000 <strong>(Donate 10k, get 20k)</strong>
              </label>
            </div>
            <div class="radio">
              <label>
                <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
                20,000 <strong>(Donate 20k, get 40k)</strong>
              </label>
            </div>
            <div class="radio">
              <label>
                <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
                50,000 <strong>(Donate 50k, get 100k)</strong>
              </label>
            </div>
            <div class="radio">
              <label>
                <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
                100,000 <strong>(Donate 100k, get 200k)</strong>
              </label>
            </div>
            <br>
            <button type="submit" class="btn btn-primary" disabled>Make Payment</button>
            <p class="text-danger">disabled until payment has been confirmed by recipient</p>
            
            <div class="col-sm-12">
                <div class="well well-sm">
                    <h5>Contact Us</h5>
                    <p class="text-success">If you have questions or complaints, you can quickly reach us on whatsapp. </p><p class="text-center"><strong>08064075956</strong></p>
                </div>
            </div>
        </div>
    </div>
</div>
    
    <footer class="footer">
        <p class="text-center">&copy; 2016 Gracify Media &#124; <a href="">Privacy Policy</a></p>
    </footer>
</body>
</html>