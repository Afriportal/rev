<div class="wrapper">
    <div class="container">
        <div class="col-md-8" id="acc-nav">
            <ul class="nav nav-tabs">
              <li role="presentation" class="active"><?php echo anchor('admin/index', 'All Members'); ?></li>
              <li role="presentation"><?php echo anchor('admin/pair_members', 'Pair Members'); ?></li>
              <li role="presentation"><?php echo anchor('admin/reported', 'Reported/Banned Members');?></li>
            </ul>
        </div>
        <div class="col-md-4">
        </div>
        <button class="btn btn-info" type="button">
          Total members found<span class="badge"><?php echo $search->num_rows(); ?></span> <!-- count -->
        </button>
    </div>
    
    
        <!--Button Search-->
        <div class="container">
            <div class="col-lg-6">
            <?php echo form_open('admin/search' ,'role="form"'); ?>
            <div class="input-group">
              <input type="text" class="form-control" name="search" placeholder="Enter Name or Mobile Number">
              <span class="input-group-btn">
                <button class="btn btn-default" type="submit">Search!</button>
              </span>
            </div><!-- /input-group -->
            <?php echo form_close(); ?>
          </div><!-- /.col-lg-6 -->
        </div><!-- /.row -->
    
    <br>
    
    <div class="container">
        <div class="col-md-12" id="views">
        <?php if(isset($_SESSION['msg'])) :?>
            <div class="alert alert-danger">
                <?php echo $_SESSION['msg']; ?>
            </div>
        <?php endif; ?>
            <div class="table-responsive">
                <table class="table">
                    <?php if ($search->num_rows() > 0) : ?>
                    <thead>
                        <tr>
                            <th>S/N</th>
                            <th>Fullname</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Location</th>
                            <th>Time Reg.</th>
<!--Sum up amount of total money paid<th>Amount</th>-->
                            <th class="text-center">
                                <button class="btn btn-danger" type="submit">Ban Member</button>
                            </th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php foreach ($search->result() as $row) : ?>
                        <tr>
                            <td><?php echo $row->usr_id; ?></td>
                            <td><?php echo ucwords($row->usr_fname); ?></td>
                            <td><?php echo $row->usr_email; ?></td>
                            <td><?php echo $row->usr_phone;?></td>
                            <td><?php echo $row->usr_state; ?></td>
                            <td><?php echo date('Y/m/d h:i A', strtotime($row->usr_created_at)); ?></td>
                            <td align="center">
                                <label>
                                    <input type="radio" name="usr_id" value=<?php echo $row->usr_id; ?> >
                                </label>
                            </td>
                        </tr>
                        <?php endforeach ; ?>
                        <?php else : ?>
                        <tr>
                            <td colspan="5" class="info">No users here!</td>
                        </tr>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>