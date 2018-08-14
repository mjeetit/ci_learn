<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Add User</title>

    <script src="<?php echo base_url();?>public/js/jquery.min.js"></script>
    <script src="<?php echo base_url();?>public/js/moment.min.js"></script>
    <script src="<?php echo base_url();?>public/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url();?>public/js/datepicker.min.js"></script>

    <link rel="stylesheet" href="<?php echo base_url();?>public/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>public/css/datetimepicker.min.css">

  </head>

  <body>
    <span style="background-color:red;">
      <div class="container" style="margin-top:5%;"><!-- container class is used to centered  the body of the browser with some decent width-->
        <div class="row">
          <a href="<?php echo base_url('user/user_profile');?>" >Home</a> | 
          <a href="<?php echo base_url('user/users_list_view');?>" >Users</a> | 
          <a href="<?php echo base_url('category/category_list_view');?>" >Categories</a> | <a href="<?php echo base_url('expense/expense_list_view');?>" >Expenses</a> | 
          <a href="<?php echo base_url('user/user_logout');?>" >
            <img src="<?php echo base_url();?>public/images/lgout.gif" />
            Logout
          </a>
        </div>
        
        <div class="row"><!-- row class is used for grid system in Bootstrap-->
          <div class="col-md-4 col-md-offset-4"><!--col-md-4 is used to create the no of colums in the grid also use for medimum and large devices-->
            <div class="login-panel panel panel-success">
              <div class="panel-heading">
                <h3 class="panel-title">Add New User</h3>
              </div>
              <div class="panel-body">
                <?php
                  $error_msg=$this->session->flashdata('error_msg');
                
                  if($error_msg){
                ?>  
                  <div class="alert alert-danger">
                    <strong>Error :  </strong><?php echo $error_msg; ?>
                  </div>
                    
                <?php  } ?>
                <form role="form" method="post" action="<?php echo base_url('user/add_user'); ?>">
                  <fieldset>
                    <div class="form-group">
                      <label>User Name</label>
                      <input class="form-control" placeholder="Name" name="username" type="text" autofocus>
                    </div>

                    <div class="form-group">
                      <label>User Email</label>
                      <input class="form-control" placeholder="E-mail" name="useremail" type="email" autofocus>
                    </div>
                  
                    <div class="form-group">
                      <label>Password</label>
                      <input class="form-control" placeholder="Password" name="userpassword" type="password" value="">
                    </div>

                    <div class="form-group">
                      <label>Age</label>
                      <input class="form-control" placeholder="Age" name="userage" type="number" value="">
                    </div>

                    <div class="form-group">
                      <label>Mobile no.</label>
                      <input class="form-control" placeholder="Mobile No" name="usermobile" type="number" value="">
                    </div>

                    <input class="btn btn-lg btn-success btn-block" type="submit" value="ADD" name="add" >
                  </fieldset>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </span>
  </body>
</html>
