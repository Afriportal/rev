
<div class="wrapper" id="wrapper">
    <div class="container">
        <div class="alert alert-success alert-dismissible" role="alert">
          <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="text-center"><strong>Welcome to i-revolution!</strong> After you choose to make payment, you will be paired within 2 - 7 days.</h4>
            <p class="text-center">Always ensure that you login to check back for when you are paired in order to avoid <strong>Account De-activation</strong></p>
        </div>
    </div>

    <div class="container">
        <div class="col-md-8" id="acc-nav">
            <ul class="nav nav-tabs">
              <li role="presentation" class="active"><?php echo anchor('users','Latest Transactions');?></li>
              <li role="presentation"><?php echo anchor('users/sent', 'Sent Payments'); ?></li>
              <li role="presentation"><?php echo anchor('users/received', 'Received Payments');?></li>
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
            <h5><strong>Select package</strong></h5><hr>
            <?php echo form_open('ph', 'role="form" class="form-horizontal"'); ?>

            <?php if(isset($_SESSION['key'])) :?>
                <div class="alert alert-info">
                    <?php echo $_SESSION['key']; ?>
                </div>
            <?php endif; ?>
            <div class="radio">
              <label>
                <input type="radio" name="ph_amount" id="ph_amount" value="5000" checked>
                5,000 <strong>(Donate 5k, get 10k)</strong>
              </label>
            </div>
            <div class="radio">
              <label>
                <input type="radio" name="ph_amount" id="ph_amount" value="10000">
                10,000 <strong>(Donate 10k, get 20k)</strong>
              </label>
            </div>
            <div class="radio">
              <label>
                <input type="radio" name="ph_amount" id="ph_amount" value="20000">
                20,000 <strong>(Donate 20k, get 40k)</strong>
              </label>
            </div>
            <div class="radio">
              <label>
                <input type="radio" name="ph_amount" id="ph_amount" value="50000">
                50,000 <strong>(Donate 50k, get 100k)</strong>
              </label>
            </div>
            <div class="radio">
              <label>
                <input type="radio" name="ph_amount" id="ph_amount" value="100000">
                100,000 <strong>(Donate 100k, get 200k)</strong>
              </label>
            </div>
            <br>
            <?php if( $order ) : ?> 
                <div class="alert alert-success">You have a running order wait till you have completed your transaction.</div>
            <?php else: ?>
                <button type="submit" class="btn btn-primary">Make Donation</button>
            <?php endif; ?>
            <?php echo form_close(); ?>
            <br><br>
            <div class="col-sm-12">
                <div class="well well-sm">
                    <h5>Contact Us</h5>
                    <p class="text-success">If you have questions or complaints, you can quickly reach us on whatsapp. </p><p class="text-center"><strong>08064075956</strong></p>
                </div>
            </div>
        </div>
    </div>
</div>