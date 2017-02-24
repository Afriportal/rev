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
              <li role="presentation"><a href="index.php">Newest Members</a></li>
              <li role="presentation" class="active"><a href="pair-members.php">Pair Members</a></li>
              <li role="presentation"><a href="received-payments.php">Received Payments</a></li>
            </ul>
        </div>
        <div class="col-md-4">
        </div>
    </div>
    
    <div class="container">
        <!--Column 1-->
        <div class="col-md-12">
            <h3>Pair this Member</h3>
            <h6 class="text-danger">Those who wants to make payment</h6>
            <div class="col-md-12" id="views">
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Phone</th>
                            <th>Location</th>
                            <th>Date Reg.</th>
                            <th>Amount Pledged</th>
                            <th>Tick</th>
                        </tr>
                    </thead>

                    <tbody>
                        <tr>
                            <td>Johnson Obukohwo</td>
                            <td>08066454490</td>
                            <td>Ibadan</td>
                            <td>12/2/2017</td>
                            <td>5,000</td>
                            <td>
                                <label>
                                  <input type="checkbox">
                                </label>
                            </td>
                        </tr>
                        <tr>
                            <td>Johnson Obukohwo</td>
                            <td>08066454490</td>
                            <td>Delta</td>
                            <td>13/2/2017</td>
                            <td>5,000</td>
                            <td>
                                <label>
                                  <input type="checkbox">
                                </label>
                            </td>
                        </tr>
                        <tr>
                            <td>Johnson Obukohwo</td>
                            <td>08066454490</td>
                            <td>Ibadan</td>
                            <td>14/2/2017</td>
                            <td>5,000</td>
                            <td>
                                <label>
                                  <input type="checkbox">
                                </label>
                            </td>
                        </tr>
                        <tr>
                            <td>Johnson Obukohwo</td>
                            <td>08066454490</td>
                            <td>Delta</td>
                            <td>15/2/2017</td>
                            <td>5,000</td>
                            <td>
                                <label>
                                  <input type="checkbox">
                                </label>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            </div>
        </div>
        <!--Close of column 1-->
        
        <!--Start of column 2-->
        <div class="col-md-12">
            <h3>With this Member</h3>
            <h6 class="text-success">Those who have already made payment</h6>
            <div class="col-md-12" id="views">
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Phone</th>
                            <th>Location</th>
                            <th>Date Reg.</th>
                            <th>Amount Receiving</th>
                            <th>Tick</th>
                        </tr>
                    </thead>

                    <tbody>
                        <tr>
                            <td>Johnson Obukohwo</td>
                            <td>08066454490</td>
                            <td>Ibadan</td>
                            <td>12/2/2017</td>
                            <td>5,000</td>
                            <td>
                                <label>
                                  <input type="checkbox">
                                </label>
                            </td>
                        </tr>
                        <tr>
                            <td>Johnson Obukohwo</td>
                            <td>08066454490</td>
                            <td>Delta</td>
                            <td>13/2/2017</td>
                            <td>10,000</td>
                            <td>
                                <label>
                                  <input type="checkbox">
                                </label>
                            </td>
                        </tr>
                        <tr>
                            <td>Johnson Obukohwo</td>
                            <td>08066454490</td>
                            <td>Ibadan</td>
                            <td>14/2/2017</td>
                            <td>20,000</td>
                            <td>
                                <label>
                                  <input type="checkbox">
                                </label>
                            </td>
                        </tr>
                        <tr>
                            <td>Johnson Obukohwo</td>
                            <td>08066454490</td>
                            <td>Delta</td>
                            <td>15/2/2017</td>
                            <td>40,000</td>
                            <td>
                                <label>
                                  <input type="checkbox">
                                </label>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            </div>
        </div>
        <!--End of column 2-->
    </div>
    <br><br>
    <!--Pair Button-->
    <div class="container">
        <div class="col-sm-4"></div>
        <div class="col-sm-4">
            <button type="button" class="btn btn-success btn-block">PAIR</button>
        </div>
        <div class="col-sm-4"></div>
    </div>
    <p>After a member pays and is confirmed, remove the name from the giving list and bring the name to the receiving list</p>
</div>
    
    <footer class="footer">
        <p class="text-center">&copy; 2016 Gracify Media &#124; <a href="">Privacy Policy</a></p>
    </footer>
</body>
</html>
</html>