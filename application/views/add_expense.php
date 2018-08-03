<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Add Expense</title>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.15.1/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.7.14/js/bootstrap-datetimepicker.min.js"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.7.14/css/bootstrap-datetimepicker.min.css">

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
                      <h3 class="panel-title">Add Expenses</h3>
                  </div>
                  <div class="panel-body">

                  <?php
                  $error_msg=$this->session->flashdata('error_msg');
                  if($error_msg){
                    echo $error_msg;
                  }
                   ?>

                      <form role="form" method="post" action="<?php echo base_url('expense/add_expense'); ?>">
                          <fieldset>
                              <div class="form-group">
                                <label>Expense Date</label>
                                <div class='input-group date' id='datetimepicker1'>
                                  <input type='text' name="expense_date" class="form-control" />
                                  <span class="input-group-addon">
                                  <span class="glyphicon glyphicon-calendar"></span>
                                  </span>
                                </div>
                              </div>

                              <div class="form-group">
                                <label>Expense Category</label>
                                <select class="form-control" name="expense_category">
                                  <option val="">Select an Option</option>
                                  <?php foreach($allExpenseCategoryList as $expense_category) { ?>
                                  <option value="<?php echo $expense_category->expense_category_id;?>"><?php echo $expense_category->expense_category_name;?></option>
                                <?php } ?>  
                                </select>
                              </div>

                              <div class="form-group">
                                <label>Expense Amount</label>
                                <input class="form-control" placeholder="expense amount" name="expense_amount" type="text" value="">
                              </div>

                              <div class="form-group">
                                <label>Expense By</label>
                                <select class="form-control" name="expense_by">
                                  <option value="">Select an Option</option>
                                  <?php foreach($allUsersList as $users) { ?>
                                  <option value="<?php echo $users->user_id;?>"><?php echo $users->user_name;?></option>
                                <?php } ?>  
                                </select>
                              </div>

                              <div class="form-group">
                                <label>Description</label>
                                <textarea class="form-control" name="expense_description">
                                </textarea>
                              </div>

                              <input class="btn btn-lg btn-success btn-block" type="submit" value="ADD" name="Add" >

                          </fieldset>
                      </form>
                      <!--for centered text-->
                  </div>
              </div>
          </div>
      </div>
  </div>
</span>
  </body>
</html>
<script type="text/javascript">
 
  $(function () {
  
    var bindDatePicker = function() {
    
      $(".date").datetimepicker({
          format:'DD-MM-YYYY',
          icons: {
            time: "fa fa-clock-o",
            date: "fa fa-calendar",
            up: "fa fa-arrow-up",
            down: "fa fa-arrow-down"
          }
      }).find('input:first').on("blur",function () {
        // check if the date is correct. We can accept dd-mm-yyyy and yyyy-mm-dd.
        // update the format if it's yyyy-mm-dd
        var date = parseDate($(this).val());

        if (! isValidDate(date)) {
          //create date based on momentjs (we have that)
          date = moment().format('YYYY-MM-DD');
        }

        $(this).val(date);
      });
    }
   
    var isValidDate = function(value, format) {
    
      format = format || false;
      // lets parse the date to the best of our knowledge
      if (format) {
        value = parseDate(value);
      }

      var timestamp = Date.parse(value);

      return isNaN(timestamp) == false;
    }
   
    var parseDate = function(value) {
    
      var m = value.match(/^(\d{1,2})(\/|-)?(\d{1,2})(\/|-)?(\d{4})$/);
    
      if (m)
        value = m[5] + '-' + ("00" + m[3]).slice(-2) + '-' + ("00" + m[1]).slice(-2);

      return value;
     }
   
    bindDatePicker();
  });
</script>


