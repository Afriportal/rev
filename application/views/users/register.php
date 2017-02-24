
    <div class="container"><h5 class="text-center"><strong>Create your Account</strong></h5></div>

        <div class="container" id="reg-pos">
            <div class="col-md-3"></div>
            <!--Login section-->
            <div class="col-md-6" id="reg-bck">
                 <?php echo form_open('register/index', 'class="form-horizontal" role="form"');?>   
                <!--Full name-->
                  <?php if(isset($registration_fail)) : ?>
                    <div class="alert alert-danger">
                      <?php echo $this->lang->line('registration_fail'); ?>
                    </div>
                  <?php endif; ?>
                 
                <!--Full Name-->
                <div class="form-group">
                    <label for="fullname" class="col-sm-3 control-label"><?php echo $this->lang->line('register_fullname');?></label>
                    <div class="col-sm-9">
                      <input type="text" name="usr_fname" class="form-control" id="fullname" value="<?php echo set_value('usr_fname'); ?>" placeholder="<?php echo $this->lang->line('register_fullname');?>">
                    <?php echo form_error('usr_fname');?>
                    </div>
                  </div>
                
                  <!--Email-->
                  <div class="form-group">
                    <label for="email" class="col-sm-3 control-label"><?php echo $this->lang->line('register_email');?></label>
                    <div class="col-sm-9">
                      <input type="email" name="usr_email" class="form-control" id="email" value="<?php echo set_value('usr_email'); ?>" placeholder="<?php echo $this->lang->line('register_email');?>">
                    <?php echo form_error('usr_email');?>
                    </div>
                  </div>
                 
                <!--Password 1-->
                  <div class="form-group">
                    <label for="password" class="col-sm-3 control-label"><?php echo $this->lang->line('register_pwd'); ?></label>
                    <div class="col-sm-9">
                      <input type="password" name="usr_pwd" class="form-control" id="password" value="<?php echo set_value('usr_pwd'); ?>" placeholder="Enter Password">
                        <?php echo form_error('usr_pwd');?>
                    </div>
                  </div>
                    
                <!--Password 2-->
                 <div class="form-group">
                    <label for="repeat_password" class="col-sm-3 control-label"><?php echo $this->lang->line('register_confirm_pwd'); ?></label>
                    <div class="col-sm-9">
                      <input type="password" name="usr_pwd_again" class="form-control" value="<?php echo set_value('usr_pwd_again'); ?>" id="repeat_password" placeholder="Re-type Password">
                   <?php echo form_error('usr_pwd_again');?>
                    </div>
                  </div>
                  
      				  <!--Captcha alone-->
      					<div class="form-group">
      						<label for="captcha" class="col-sm-3 control-label">Captcha</label>
      						<div class="col-sm-9"><?php echo $captcha['image'] ?></div>
      					</div>
      					
      					<div class="form-group">
      						<label for="captcha" class="col-sm-3 control-label">&nbsp;</label>
      						<div class="col-sm-9">
      							<input type="text" class="form-control" autocomplete="off" name="userCaptcha" value="" placeholder="Please enter the captcha">
                    <?php echo form_error('userCaptcha'); ?>
      						</div>
      					</div>
				  
                <div class="col-sm-12">
                    <div class="col-sm-3"></div>
                    <div class="col-sm-9">
                        <p>By clicking the button below, you agree to be bound by our terms and conditions</p>
                    </div>
                </div>
                    
                <div class="col-sm-12">
                      <div class="col-sm-2"></div>
                    <div class="col-sm-10">
                        <button type="submit" class="btn btn-info btn-block"><?php echo $this->lang->line('register_button');?></button>
                    </div>
                      <br>
                </div>
                
                <div class="col-sm-12">
                    <div class="col-sm-2"></div>
                    <div class="col-sm-10">                      
                        <h4><a href=""><?php echo anchor('signin', $this->lang->line('signin_button'));?></a></h4>
                    </div>
                  </div>
                <?php echo form_close();?>
            </div>
            <!--/End of login-->
            <div class="col-md-3"></div>
        </div>
   