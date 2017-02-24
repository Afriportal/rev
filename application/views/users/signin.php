<div class="container">
  <h1 class="text-center"><span class="glyphicon glyphicon-king"></span> Welcome to Revolution <span class="glyphicon glyphicon-king"> </span></h1>
  <p class="text-center">Everyone is king</p><hr>
</div>
  
      <?php if (isset($login_fail)) : ?>
        <div class="container">
          <div class="col-md-6">
            <div class="alert alert-danger">
              <p class="text-center"><?php echo $this->lang->line('login_error') ; ?></p>
            </div>
          </div>
        </div>  
      <?php endif ; ?>

      <?php if (isset($newuser)) : ?>
        <div class="container">
          <div class="col-md-2"></div>
          <div class="col-md-8">
            <div class="alert alert-success">
              <p class="text-center"><?php echo $_SESSION['message'] ; ?></p>
            </div>
          </div>
          <div class="col-md-2"></div>
        </div>  
      <?php endif ; ?>


      
    <div class="container" id="login-pos">
        <!--Login section-->
          

        <div class="col-md-6">
            <h3 class="text-center"><?php echo $this->lang->line('login_header');?></h3>
            
            <?php echo form_open('signin/index', 'class="form-signin form-horizontal" role="form"');?>
              <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 control-label"><?php echo $this->lang->line('signin_email');?></label>
                <div class="col-sm-10">
                  <input type="email" name="usr_email" class="form-control" id="inputEmail3" autofocus="autofocus();"  placeholder="<?php echo $this->lang->line('signin_email');?>" value"<?php echo set_value('usr_email');?>" >
                    <?php echo form_error('usr_email');?>
                </div>
              </div>
            
            
              <div class="form-group">
                <label for="inputPassword3" class="col-sm-2 control-label"><?php echo $this->lang->line('signin_password');?></label>
                <div class="col-sm-10">
                  <input type="password" name="usr_password" class="form-control"  id="inputPassword3"  placeholder="<?php echo $this->lang->line('signin_password');?>" value="<?php echo set_value('usr_password'); ?>">
                <?php echo form_error('usr_password');?>
                </div>
              </div>
            
            
            <!--Captcha alone
            <div class="form-group">
                <label for="captcha" class="col-sm-2 control-label">Captcha</label>
                <div class="col-sm-10"><?php echo $captcha['image'] ?></div>
            </div>
            
            <div class="form-group">
                <label for="captcha" class="col-sm-2 control-label">&nbsp;</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" autocomplete="off" name="userCaptcha" value="" placeholder="Please enter the captcha">
                    <?php echo form_error('userCaptcha'); ?>
                </div>
            </div>
            -->
            
              <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" name="remember"> Remember me
                    </label>
                  </div>
                </div>
              </div>
            
              <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                  <button type="submit" class="btn btn-success"><?php echo $this->lang->line('signin_button'); ?></button>
                </div>
              </div>
            <?php echo form_close(); ?>
        </div>
        <!--/End of login-->
        
        <div class="col-md-1"></div>
        
        <div class="col-md-5" id="register-bck">
            <h2 class="text-center">Register an Account</h2>
            <p class="text-center">If you have not registered an account with us, click the link below to register</p><br><br>
            <p class="text-center">
              <?php echo anchor('register/', $this->lang->line('register_button'), 'id = "reg-link"' ); ?>
            </p>
        </div>
    </div>