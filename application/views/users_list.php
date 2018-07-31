<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>All Users</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  </head>
  <body>
  <?php //echo "17 view page <pre>"; print_r($allUsersList); die;   ?>
    <div class="container" style="margin-top:10%;">
      <div class="row">
        <div class="col-md-4">
          <table class="table table-bordered table-striped">
            <tr>
              <th>s.no</th>
              <th>Name</th>
              <th>Email</th>
              <th>Age</th>
              <th>Mobile</th>
              <th>Action</th>
            </tr>
            <?php 
              foreach($allUsersList as $users){ ?>  
                <tr>
                  <td><?php echo $users->user_id; ?></td>
                  <td><?php echo $users->user_name; ?></td>
                  <td><?php echo $users->user_email; ?></td>
                  <td><?php echo $users->user_age; ?></td>
                  <td><?php echo $users->user_mobile; ?></td>
                  <td></td>
                </tr>  
            <?php  }  ?>
            
          </table>
        </div>
      </div>
      <a href="<?php echo base_url('user/user_logout');?>" >  <button type="button" class="btn-primary">Logout</button></a>
      <a href="<?php echo base_url('user/user_profile');?>" >Home</a> | 
      <a href="<?php echo base_url('expense/expense_list_view');?>" >Expense List</a>
    </div>
  </body>
</html>