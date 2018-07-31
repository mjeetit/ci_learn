<?php

class Expense extends CI_Controller {

  public function __construct(){

      parent::__construct();
  		$this->load->helper('url');
   		$this->load->model('expense_model');
      $this->load->library('session');
  }

  public function expense_list_view(){

    $allExpensesList = $this->expense_model->getAllExpenseList();    
    $data = array(
      "allExpensesList" => $allExpensesList
      );
    $this->load->view("expense_list.php",$data);
  }
}
?>