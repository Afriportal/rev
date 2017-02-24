<div class="wrapper">
    <div class="container">
        <div class="col-md-8" id="acc-nav">
            <ul class="nav nav-tabs">
              <li role="presentation"><?php echo anchor('admin/', 'All Members'); ?></li>
              <li role="presentation" class="active"><?php echo anchor('admin/pair_members', 'Pair Members'); ?></li>
              <li role="presentation"><?php echo anchor('admin/reported', 'Reported/Banned Members');?></li>
            </ul>
        </div>
        <div class="col-md-4">
        </div>
    </div>
    
    <div class="container">
        <!--Column 1-->
        <?php echo form_open('admin/pairing', 'role="form"'); ?>
        <div class="col-md-12">
            <?php if(isset($_SESSION['msg'])) :?>
                <div class="alert alert-danger">
                    <?php echo $_SESSION['msg']; ?>
                </div>
            <?php endif; ?>
            <h3><?php echo $page_heading1; ?></h3>

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
                            <th>Pledged</th>
                            <th>Tick</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php if($donator->num_rows() > 0 ) : ?>
                            <?php foreach($donator->result() as $row ) : ?>
                        <tr>
                            <td><?php echo ucwords($row->usr_fname); ?></td>
                            <td><?php echo $row->usr_phone; ?></td>
                            <td><?php echo $row->usr_state; ?></td>
                            <td><?php echo date('Y/m/d h:i: A', strtotime($row->created_at)); ?></td>
                            <th><?php echo number_format($row->amount,2);?></th>
                            <td>
                                <label>
                                  <input name="payers[]" value="<?php echo $row->did; ?>" type="checkbox">
                                </label>
                            </td>
                        </tr>
                        <?php endforeach ; ?>
                        <?php else : ?>
                        <tr>
                            <td colspan="5">No donation users yet!</td>
                        </tr>
                        <?php endif; ?>                     
                       
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>Name</th>
                            <th>Phone</th>
                            <th>Location</th>
                            <th>Date Reg.</th>
                            <th>Pledged</th>
                            <th>Tick</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
            </div>
        </div>
        <!--Close of column 1-->
        
        <!--Start of column 2-->
        <div class="col-md-12">
            <h3><?php echo $page_heading2; ?></h3>
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
                            <th>Due Date.</th>
                            <th>Expecting</th>
                            <th>Tick</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php if($receiver->num_rows() > 0 ) : ?>
                            <?php foreach($receiver->result() as $row ) : ?>
                        <tr>
                            <td><?php echo ucwords($row->usr_fname); ?></td>
                            <td><?php echo $row->usr_phone; ?></td>
                            <td><?php echo $row->usr_state; ?></td>
                            <td><?php echo date('Y/m/d H:i A', strtotime($row->created_at)); ?></td>
                            <td><?php echo date('Y/m/d H:i A', strtotime($row->due_date)); ?></td>
                            <th><?php echo number_format($row->amount,2);?></th>
                            <td>
                                <label>
                                    <input type="hidden" name="receiver_id" value="<?php echo $row->usr_id; ?>">
                                    <input type="radio" name="receiver" value="<?php echo $row->did; ?>">
                                </label>
                            </td>
                        </tr>
                        <?php endforeach ; ?>
                        <?php else : ?>
                        <tr>
                            <td colspan="5">No receiver users yet!</td>
                        </tr>
                        <?php endif; ?>                     
                       
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>Name</th>
                            <th>Phone</th>
                            <th>Location</th>
                            <th>Date Reg.</th>
                            <th>Due Date.</th>
                            <th>Expecting</th>
                            <th>Tick</th>
                        </tr>
                    </tfoot>

                </table>
            </div>
            </div>
        </div>
        <!--Pair Button-->
        <div class="clearfix"></div>
        <div class="col-sm-4"></div>
        <div class="col-sm-4">
            <button type="submit" class="btn btn-success btn-block">PAIR</button>
        </div>
        <div class="col-sm-4"></div>
        <!--End of column 2-->
        <?php echo form_close(); ?>
    </div>
    <br><br>
    <p>After a member pays and is confirmed, remove the name from the giving list and bring the name to the receiving list</p>
</div>
    