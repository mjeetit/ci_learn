<?php
/**
* This is Category model class, handle category related events
*
* @category   Category
* @author     CI_learn
* @copyright  © 2018 Room Expense Management.
* @license    PHP 5.6
* @version    Version 3.0
* @link       http://localhost/ci_learn/category/category_list_view
* @since      Class available since Release 2.
* 
**/
class Category extends CI_Controller {


  /**
  * @param  load different models
  * @return return diffent model object
  */
  public function __construct(){

      parent::__construct();
  		$this->load->helper('url');
      $this->load->model('category_model');
   		$this->load->model('expense_model');
      $this->load->model('user_model');
      $this->load->library('session');
  }


  /**
  * Get the list of all Category details and send to the Category list view page
  * @param  not required
  * @return list category details
  **/
  public function category_list_view(){

    $allCategoryList = $this->category_model->getAllCategoryList();    
    $data = array(
      "allCategoryList" => $allCategoryList
    );

    $this->load->view("category_list.php",$data);
  }


  /**
  * On click of Add Category button this function redirect user at add category 
  * window.
  *
  * @param  not required
  * @return redirect to the Add Category window
  *
  **/
  public function add_category_view(){

    $this->load->view("add_category.php"); 
  }

  /**
  * When user click on ADD button of Add Category request comes here
  * we 
  * @param  get form data in post request
  * @return redirect to the Add Category window
  *
  **/
  public function add_category(){

    $fresh_category=array(
      'expense_category_name'=>$this->input->post('expense_category_name'),
      'Description'=>$this->input->post('Description')
    );

    //server side validation of input values
    if($fresh_category['expense_category_name'] == '' || $fresh_category['Description'] == '' ){

      $this->session->set_flashdata('error_msg', 'Error occured,Try again.');
      redirect('category/add_category_view');

    }else{

      $this->category_model->insert_fresh_category($fresh_category);
      $this->session->set_flashdata('success_msg', 'Category added successfully.');

      redirect('category/category_list_view');
    }

  }
}
?>