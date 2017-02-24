   
<div class="wrapper">
    <div class="container">
        <div class="col-md-8" id="acc-nav">
            <ul class="nav nav-tabs">
              <li role="presentation"><?php echo anchor('admin/index', 'All Members'); ?></li>
              <li role="presentation"><?php echo anchor('admin/pair_members', 'Pair Members'); ?></li>
              <li role="presentation" class="active"><?php echo anchor('admin/reported', 'Reported/Banned Members');?></li>
            </ul>
        </div>
        <div class="col-md-4">
        </div>
        <button class="btn btn-warning" type="button">
          Total reported members <span class="badge"><?php echo $reported->num_rows() ?></span>
        </button>
    </div>
    
    <div class="container">
        <div class="col-md-1"></div>
        <div class="col-md-10" id="views">
            <?php if(isset($_SESSION['msg'])) :?>
                <div class="alert alert-danger">
                    <?php echo $_SESSION['msg']; ?>
                </div>
            <?php endif; ?>
            <div class="table-responsive">
                <?php echo form_open('admin/unban', 'role="form"'); ?>
                <table class="table">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Location</th>
                            <th class="text-center">
                                <button class="btn btn-success" type="submit">Restore Member</button>
                            </th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php if( $reported->num_rows() > 0 ) : ?>
                            <?php foreach($reported->result() as $report) : ?>
                            <tr>
                                <td><?php echo ucwords($report->usr_fname);?></td>
                                <td><?php echo $report->usr_email; ?></td>
                                <td><?php echo $report->usr_phone; ?></td>
                                <td><?php echo $report->usr_state; ?></td>
                                <td align="center">
                                    <label>
                                        <input type="radio" name="usr_id" value=<?php echo $report->usr_id; ?> >
                                    </label>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                        <?php else : ?>
                            <tr>
                                <td>
                                    No records found!
                                </td>
                            </tr>
                        <?php endif; ?>
                    </tbody>
                </table>
                <?php echo form_close(); ?>
            </div>
        </div>
        <div class="col-md-1"></div>
    </div>
    Show top 50 list, with a "next page" link
</div>