<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>All Expenses</title>
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
              <th>Expese Category</th>
              <th>Expense Amount</th>
              <th>Expense By</th>
              <th>Expense Date</th>
              <th>Createddate</th>
              <th>Action</th>
            </tr>
            <?php 
              foreach($allExpensesList as $expenses){
  //echo "<br>line 25 expense view page = <pre>"; print_r($allExpensesList); die;             ?>  
                <tr>
                  <td><?php echo $expenses->expense_id; ?></td>
                  <td><?php echo $expenses->expense_date; ?></td>
                  <td><?php echo $expenses->expense_category; ?></td>
                  <td><?php echo $expenses->expense_amount; ?></td>
                  <td><?php echo $expenses->user_name; ?></td>
                  <td><?php echo $expenses->createddate; ?></td>
                  <td></td>
                </tr>  
            <?php  }  ?>
            
          </table>
        </div>
      </div>
      <a href="<?php echo base_url('user/user_logout');?>" >  <button type="button" class="btn-primary">Logout</button></a>
      <a href="<?php echo base_url('user/user_profile');?>" >Home</a> | 
      <a href="<?php echo base_url('user/users_list_view');?>" >Users List</a> | 
    </div>
  </body>
</html>