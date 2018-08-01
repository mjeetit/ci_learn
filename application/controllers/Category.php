<?php

class Category extends CI_Controller {

  public function __construct(){

      parent::__construct();
  		$this->load->helper('url');
      $this->load->model('category_model');
   		$this->load->model('expense_model');
      $this->load->model('user_model');
      $this->load->library('session');
  }

  public function expense_list_view(){

    $allExpensesList = $this->expense_model->getAllExpenseList();    
    $data = array(
      "allExpensesList" => $allExpensesList
      );
    $this->load->view("expense_list.php",$data);
  }


  public function add_expense_view(){

    $allUsersList = $this->user_model->getAllUsersList();
    $allExpenseCategoryList = $this->expense_model->getAllExpenseCategoryList();
    
    $data = array(
      "allUsersList" => $allUsersList,
      "allExpenseCategoryList" => $allExpenseCategoryList
      );  

    $this->load->view("add_expense.php",$data); 
  }

  public function add_expense(){

    $fresh_expense=array(
      'expense_date'=>$this->input->post('expense_date'),
      'expense_category'=>$this->input->post('expense_category'),
      'expense_amount'=>$this->input->post('expense_amount'),
      'expense_by'=>$this->input->post('expense_by'),
      'description'=>$this->input->post('expense_description')
    );

    //echo "line 46 expense controller <pre>"; print_r($fresh_expense); die;

    //server side validation of input values
    if($fresh_expense['expense_category'] == '' || $fresh_expense['expense_amount'] == '' || $fresh_expense['expense_by'] == ''){

      $this->session->set_flashdata('error_msg', 'Error occured,Try again.');
      redirect('expense/add_expense_view');

    }else{

      $this->expense_model->insert_fresh_expense($fresh_expense);
      $this->session->set_flashdata('success_msg', 'Expense added successfully.');

      redirect('expense/expense_list_view');
    }

  }


}
?>