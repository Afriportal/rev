
    <div class="container"><h5 class="text-center"><strong>Create your Account</strong></h5></div>

        <div class="container" id="reg-pos">
            <div class="col-md-3"></div>
            <!--Login section-->
            <div class="col-md-6" id="reg-bck">
                 <?php echo form_open('register/index', 'class="form-horizontal" role="form"');?>   
                <!--Full name-->
                  <div class="form-group">
                    <label for="inputFullname" class="col-sm-3 control-label"><?php echo $this->$lang->line('fullname'); ?></label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="inputFullname" placeholder="<?php echo $this->$lang->line('fullname');?>">
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="username" class="col-sm-3 control-label"><?php echo $this->$lang->line('username'); ?></label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="inputusername" placeholder="<?php echo $this->$lang->line('username');?>">
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="referral" class="col-sm-3 control-label"><?php echo $this->$lang->line('register_referral'); ?></label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="inputreferral" placeholder="<?php echo $this->$lang->line('register_referral');?>">
                    </div>
                  </div>

                  <!--Email-->
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-3 control-label"><?php echo $this->lang->line('register_email');?></label>
                    <div class="col-sm-9">
                      <input type="email" class="form-control" id="inputEmail3" placeholder="<?php echo $this->lang->line('register_email');?>">
                    </div>
                  </div>
                    
                <!--Password 1-->
                  <div class="form-group">
                    <label for="inputPassword3" class="col-sm-3 control-label"><?php echo $this->lang->line('register_pwd'); ?></label>
                    <div class="col-sm-9">
                      <input type="password" class="form-control" id="inputPassword3" placeholder="<?php echo $this->lang->line('register_pwd'); ?>">
                    </div>
                  </div>
                    
                <!--Password 2-->
                 <div class="form-group">
                    <label for="inputPassword3" class="col-sm-3 control-label"><?php echo $this->lang->line('register_confirm_pwd'); ?></label>
                    <div class="col-sm-9">
                      <input type="password" class="form-control" id="inputPassword3" placeholder="<?php echo $this->lang->line('register_confirm_pwd'); ?>">
                    </div>
                  </div>
                    
                    <div class="col-sm-3"></div>
                    <div class="col-sm-9">
                        <p>By clicking the button below, you agree to be bound by our terms and conditions</p>
                    </div>
                    
                  <div class="form-group">
                    <div class="col-sm-offset-3 col-sm-9">
                      <button type="submit" class="btn btn-info"><?php echo $this->lang->line('register_button');?></button>
                    </div>
                  </div>
                <?php echo form_close();?>
            </div>
            <!--/End of login-->
            <div class="col-md-3"></div>
        </div>
   