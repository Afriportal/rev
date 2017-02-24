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
                        <a href="forgot-password.php"  style="color:#000;">Forgot your password</a>
                    </li>
                    <li>
                        <a href="about.html" style="color:#000;">About Us</a>
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
    <div class="container"><h5 class="text-center"><strong>Complete your Registration</strong></h5></div>

    <!--Complete registration alert-->
        <div class="container">
			<div class="col-md-2"></div>
				<div class="col-md-8 alert alert-danger" role="alert">
				  <h4 class="text-center">Please kindly ensure that you use your correct details here</h4>
					<p class="text-center">Note that details cannot be changed  <strong>after registration</strong></p>
				</div>
			<div class="col-md-2"></div>
		</div>    
    
    
        <div class="container" id="reg-pos">
            <div class="col-md-3"></div>
            <!--Login section-->
            <div class="col-md-6" id="reg-bck">
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
                    <label for="Account-number" class="col-sm-3 control-label">Account No:</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" placeholder="Account number">
                    </div>
                  </div>
                    
                <!--Number-->
                  <div class="form-group">
                    <label for="number" class="col-sm-3 control-label">Phone No:</label>
                    <div class="col-sm-9">
                      <input type="number" class="form-control" id="inputEmail3" placeholder="+234-8033998877">
                    </div>
                  </div>
                    <div class="col-sm-3"></div>
                    <div class="col-sm-9">
                        <p style="font-size:11px;font-weight:bold">While typing your phone number above, use the following format:(+234-8033998877) </p><br>
                    </div>
                    
                    <!--Select State--> 
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-3 control-label">Select State</label>
                        <div class="col-sm-9">
                            <select class="form-control">
                              <option>Abuja</option>  
                              <option>Abia</option>
                              <option>Adamawa</option>
                              <option>Akwa Ibom</option>
                              <option>Anambra</option>
                              <option>Bauchi</option>
                            <option>Benue</option>
                              <option>Borno</option>
                              <option>Cross River</option>
                              <option>Delta</option>
                             <option>Ebonyi</option>
                              <option>Edo</option>
                                <option>Ekiti</option>
                                <option>Enugu</option>
                              <option>Imo</option>
                              <option>Jigawa</option>
                              <option>Kano</option>
                              <option>Katsina</option>
                                <option>Kebbi</option>
                              <option>Kogi</option>
                              <option>Kwara</option>
                              <option>Lagos</option>
                              <option>Niger</option>
                                <option>Ogun</option>
                              <option>Ondo</option>
                              <option>Osun</option>
                              <option>Oyo</option>
                              <option>Plateau</option>
                                <option>Rivers</option>
                              <option>Sokoto</option>
                              <option>Taraba</option>
                              <option>Yobe</option>
                              <option>Zamfara</option>
                            </select>
                        </div>
                    </div>
                    
                    
                  <div class="form-group">
                    <div class="col-sm-offset-3 col-sm-9">
                      <button type="submit" class="btn btn-success">Complete your registration</button>
                    </div>
                  </div>
                </form>
            </div>
            <!--/End of login-->
            <div class="col-md-3"></div>
        </div>
    
    <footer class="footer">
        <p class="text-center">&copy; 2017 i-revolution &#124; <a href="">Our Policy</a></p>
    </footer>
</body>
</html>