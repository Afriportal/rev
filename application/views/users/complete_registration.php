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
                <?php echo form_open('register/update_account', 'role="form" class="form-horizontal"'); ?>
                <!--bank name-->
                  <div class="form-group">
                    <label for="bank-name" class="col-sm-3 control-label">Bank name:</label>
                    <div class="col-sm-9">
                      <input type="text" name="usr_bank_name" class="form-control" placeholder="Bank name" value="<?php echo set_value('usr_bank_name'); ?>">
                      <?php echo form_error('usr_bank_name'); ?>
                    </div>
                  </div>
                
                <!--Account name-->
                  <div class="form-group">
                    <label for="acc-name" class="col-sm-3 control-label">Account name:</label>
                    <div class="col-sm-9">
                      <input type="text" name="usr_account_name" class="form-control" placeholder="Account name" value="<?php echo set_value('usr_account_name'); ?>">
                      <?php echo form_error('usr_account_name'); ?>
                    </div>
                  </div>
                 
                 <div class="form-group">
                     <label for="account-type" class="col-sm-3 control-label">Account type:</label>
                     <div class="col-sm-9">
                        <label class="radio-inline">
                          <input type="radio" name="usr_account_type" value="Savings" checked> Savings
                        </label>
                        <label class="radio-inline">
                          <input type="radio" name="usr_account_type" value="Current"> Current
                        </label>
                     </div>
                 </div>
                    
               <!--Account number-->
                  <div class="form-group">
                    <label for="Account-number" class="col-sm-3 control-label">Account No:</label>
                    <div class="col-sm-9">
                      <input type="number" class="form-control" name="usr_account_number" placeholder="Account number" value="<?php echo set_value('usr_account_number'); ?>">
                      <?php echo form_error('usr_account_number'); ?>
                    </div>
                  </div>
                    
                <!--Number-->
                  <div class="form-group">
                    <label for="number" class="col-sm-3 control-label">Phone No:</label>
                    <div class="col-sm-9">
                      <input type="number" class="form-control" name="usr_phone" id="inputEmail3" placeholder="+234-8033998877" value="<?php echo set_value('usr_phone'); ?>">
                      <?php echo form_error('usr_phone'); ?>
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
                            <select name="usr_state" class="form-control">
                              <option value="">--Select State--</option>
                              <option value="Abuja">Abuja</option>  
                              <option value="Abia">Abia</option>
                              <option value="Adamawa">Adamawa</option>
                              <option value="Akwa Ibom">Akwa Ibom</option>
                              <option value="Anambra">Anambra</option>
                              <option value="Bauchi">Bauchi</option>
                            <option value="Benue">Benue</option>
                              <option value="Borno">Borno</option>
                              <option value="Cross River">Cross River</option>
                              <option value="Delta">Delta</option>
                             <option value="Ebonyi">Ebonyi</option>
                              <option value="Edo">Edo</option>
                                <option value="Ekiti">Ekiti</option>
                                <option value="Enugu">Enugu</option>
                              <option value="Imo">Imo</option>
                              <option value="Jigawa">Jigawa</option>
                              <option value="Kano">Kano</option>
                              <option value="Katsina">Katsina</option>
                                <option value="Kebbi">Kebbi</option>
                              <option value="Kogi">Kogi</option>
                              <option value="Kwara">Kwara</option>
                              <option value="Lagos">Lagos</option>
                              <option value="Niger">Niger</option>
                                <option value="Ogun">Ogun</option>
                              <option value="Ondo">Ondo</option>
                              <option value="Osun">Osun</option>
                              <option value="Oyo">Oyo</option>
                              <option value="Plateau">Plateau</option>
                                <option value="Rivers">Rivers</option>
                              <option value="Sokoto">Sokoto</option>
                              <option value="Taraba">Taraba</option>
                              <option value="Yobe">Yobe</option>
                              <option value="Zamfara">Zamfara</option>
                            </select>
                        </div>
                    </div>
                        <?php echo form_error('usr_state'); ?>
                    
                  <?php echo form_hidden('usr_id', $id); ?> 
                  <div class="form-group">
                    <div class="col-sm-offset-3 col-sm-9">
                      <button type="submit" class="btn btn-success">Complete your registration</button>
                    </div>
                  </div>
                <?php echo form_close(); ?>
            </div>
            <!--/End of login-->
            <div class="col-md-3"></div>
        </div>
    