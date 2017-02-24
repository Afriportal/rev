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
              <li role="presentation" class="active"><?php echo anchor('admin/index', 'All Members'); ?></li>
              <li role="presentation"><?php echo anchor('admin/pair_members', 'Pair Members'); ?></li>
              <li role="presentation" class="active"><?php echo anchor('admin/reported-members.php', 'Reported/Banned Members');?></li>
            </ul>
        </div>
        <div class="col-md-4">
        </div>
        <button class="btn btn-warning" type="button">
          Total reported members <span class="badge">4</span>
        </button>
    </div>
    
    <div class="container">
        <div class="col-md-1"></div>
        <div class="col-md-10" id="views">
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Location</th>
                            <th>Time Reported.</th>
                            <th class="text-center">
                                <button class="btn btn-success" type="button">Restore Member</button>
                            </th>
                        </tr>
                    </thead>

                    <tbody>
                        <tr>
                            <td>Johnson Obukohwo</td>
                            <td>john-doe@gmail.com</td>
                            <td>08066454490</td>
                            <td>Ibadan</td>
                            <td>12/2/2017</td>
                            <td align="center">
                                <label>
                                  <input type="checkbox">
                                </label>
                            </td>
                        </tr>
                        <tr>
                            <td>Johnson Obukohwo</td>
                            <td>john-doe@gmail.com</td>
                            <td>08066454490</td>
                            <td>Delta</td>
                            <td>13/2/2017</td>
                            <td align="center">
                                <label>
                                  <input type="checkbox">
                                </label>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="col-md-1"></div>
    </div>
    Show top 50 list, with a "next page" link
</div>
    
    <footer class="footer">
        <p class="text-center">&copy; 2016 Gracify Media &#124; <a href="">Privacy Policy</a></p>
    </footer>
</body>
</html>
</html>