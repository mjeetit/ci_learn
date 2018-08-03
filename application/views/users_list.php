<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>All Users</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  </head>
  <body>
  <?php //echo "17 view page <pre>"; print_r($allUsersList); die;   ?>
    <div class="container" style="margin-top:5%;">
      <div class="row">
        <a href="<?php echo base_url('user/user_profile');?>" >Home</a> | 
        <a href="<?php echo base_url('user/users_list_view');?>" >Users</a> | 
        <a href="<?php echo base_url('category/category_list_view');?>" >Categories</a> | 
        <a href="<?php echo base_url('expense/expense_list_view');?>" >Expenses</a> | 
        <a href="<?php echo base_url('user/user_logout');?>" >
          <img src="<?php echo base_url();?>public/images/lgout.gif" />
          Logout
        </a>
      </div>
      <div class="row">
        <div class=""><!--<div class="col-md-4">-->
          <table class="table table-bordered table-striped">
            <tr>
              <th class="text-left" colspan="7">
                <a href="<?php  echo base_url('user'); //echo base_url('user/add_user_view'); ?>">
                  <img src="<?php echo base_url();?>public/images/i_add.png" />  
                  Add User
                </a>
              </th>
            </tr>
            <tr>
              <th>s.no</th>
              <th>Name</th>
              <th>Email</th>
              <th>Age</th>
              <th>Mobile</th>
              <th>Status</th>
              <th>Action</th>
            </tr>
            <?php 
              foreach($allUsersList as $users){ ?>  
                <tr>
                  <td>
                    <?php echo $users->user_id; 
                      if( $users->is_admin == 1 ){  ?>
                          <img style="float:right;" src="<?php echo base_url();?>public/images/user.gif" />
                    <?php } ?>
                  </td>
                  <td><?php echo $users->user_name; ?></td>
                  <td><?php echo $users->user_email; ?></td>
                  <td><?php echo $users->user_age; ?></td>
                  <td><?php echo $users->user_mobile; ?></td>
                  <td>
                      <?php 
                        if($users->deleted != '0' ){ 
                          echo "Inactive"; 
                        }else{ 
                          echo "Active"; 
                        } 
                      ?>
                  </td>
                  <td class="text-center">
                    <a href="<?php echo base_url('user/expense_edit_view');?>" ><img src="<?php echo base_url();?>public/images/pencil.gif" /></a> | 
                    <a href="<?php echo base_url('user/expense_detail_view');?>" ><img src="<?php echo base_url();?>public/images/view_detail.png" /></a> | 
                    <a href="<?php echo base_url('user/expense_delete');?>" ><img src="<?php echo base_url();?>public/images/delete_image.png" /></a> 
                  </td>
                </tr>  
            <?php }  ?>
            
          </table>
        </div>
      </div>
    </div>
  </body>
</html>