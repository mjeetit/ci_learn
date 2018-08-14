<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>All Expenses</title>
    
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
        <a href="<?php echo base_url('category/category_list_view');?>" >Categories</a> | <a href="<?php echo base_url('expense/expense_list_view');?>" >Expenses</a> | 
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
                <a href="<?php echo base_url('category/add_category_view');?>" >
                  <img src="<?php echo base_url();?>public/images/i_add.png" />
                  Add Category
                </a>
              </th>
            </tr>
            <tr>
              <th class="text-center">s.no</th>
              <th class="text-center">Category Name</th>
              <th class="text-center">Description</th>
              <th class="text-center">Action</th>
            </tr>
            <?php foreach($allCategoryList as $category){ ?>  
              <tr>
                <td class="text-center">
                  <?php echo $category->expense_category_id; ?>
                </td>
                <td class="text-center">
                  <?php echo $category->expense_category_name; ?>
                </td>
                <td class="text-center">
                  <?php echo $category->Description; ?>
                </td>
                <td class="text-center">
                  <a href="<?php echo base_url('user/expense_edit_view');?>" ><img src="<?php echo base_url();?>public/images/pencil.gif" /></a> | 
                  <a href="<?php echo base_url('user/expense_detail_view');?>" ><img src="<?php echo base_url();?>public/images/view_detail.png" /></a> | 
                  <a href="<?php echo base_url('user/expense_delete');?>" ><img src="<?php echo base_url();?>public/images/delete_image.png" /></a> 
                </td>
              </tr>  
            <?php  }  ?>
          </table>
        </div>
      </div>
    </div>
  </body>
</html>