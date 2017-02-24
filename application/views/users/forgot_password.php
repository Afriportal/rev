
<div class="container"><h5 class="text-center"><strong>Enter your email to recover your password</strong></h5></div>

    <div class="container" id="recover-pwd">
        <div class="col-md-3"></div>
        <!--Login section-->
        <div class="col-md-6" id="reg-bck">
            <?php echo form_open('password/forgot_password', 'role="form" class="form-horizontal"'); ?>
            
            <!--Email-->
              <div class="form-group">
                <label for="inputEmail3" class="col-sm-3 control-label"><?php echo $this->lang->line('register_email'); ?></label>
                <div class="col-sm-9">
                  <input type="email" class="form-control" id="inputEmail3" name="usr_email" placeholder="<?php echo $this->lang->line('register_email');?>">
                <?php echo form_error('usr_email'); ?>
                </div>
              </div>
              
                            
              <div class="form-group">
                <div class="col-sm-offset-3 col-sm-9">
                  <button type="submit" class="btn btn-info">Recover Password</button>
                </div>
              </div>
                <div class="col-sm-3"></div>
                <div class="col-sm-9">
                    <p>A link to recover your password will be sent to your email.</p>
                </div>
            <?php echo form_close(); ?>
        </div>
        <!--/End of login-->
        <div class="col-md-3"></div>
    </div>