<?php
  $user_id=$this->session->userdata('user_id');

  if(!$user_id){
    redirect('user/login_view');
  }
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>User Profile Dashboard-CodeIgniter Login Registration</title>
    
    <script src="<?php echo base_url();?>public/js/jquery.min.js"></script>
    <script src="<?php echo base_url();?>public/js/moment.min.js"></script>
    <script src="<?php echo base_url();?>public/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url();?>public/js/datepicker.min.js"></script>

    <link rel="stylesheet" href="<?php echo base_url();?>public/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>public/css/datetimepicker.min.css">

  </head>
  <body>

    <div class="container" style="margin-top:5%;">
      <div class="row">
        <a href="<?php echo base_url('user/user_profile');?>" >Home</a> | 
        <a href="<?php echo base_url('user/users_list_view');?>" >Users</a> | 
        <a href="<?php echo base_url('category/category_list_view');?>" >Categories</a> | 
        <a href="<?php echo base_url('expense/expense_list_view');?>" >Expenses</a> | <a href="<?php echo base_url('user/user_logout');?>" >
          <img src="<?php echo base_url();?>public/images/lgout.gif" />
          Logout
        </a>
      </div>
      <div class="row">
        <div class="col-md-4">
          <table class="table table-bordered table-striped">
            <!-- <tr>
              <th class="col-md-2 text-left" colspan="6">
                <a href="<?php echo base_url('user/add_user_view'); ?>">
                  <img src="<?php echo base_url();?>public/images/i_add.png" />  
                  Add User
                </a>
              </th>
            </tr> -->
            <tr>
              <th colspan="2"><h4 class="text-center">User Info</h3></th>
            </tr>
            <tr>
              <td>User Name</td>
              <td><?php echo $this->session->userdata('user_name'); ?></td>
            </tr>
            <tr>
              <td>User Email</td>
              <td><?php echo $this->session->userdata('user_email');  ?></td>
            </tr>
            <tr>
              <td>User Age</td>
              <td><?php echo $this->session->userdata('user_age');  ?></td>
            </tr>
            <tr>
              <td>User Mobile</td>
              <td><?php echo $this->session->userdata('user_mobile');  ?></td>
            </tr>
          </table>
        </div>
      </div>
    </div>
  </body>
</html>