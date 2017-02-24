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
                        <a href="about.html" style="color:#000;"><?php echo $this->session->userdata('username'); ?></a>
                    </li>
                    <li>
                        <a href="Contact-us.php" style="color:#000;">Contact Us</a>
                    </li>
                    <li>
                        <?php echo  anchor('signin/signout', 'Logout', 'style="color:#000;"'); ?>
                    </li>

                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>