<?php
class Expense_model extends CI_model{

  public function getAllExpenseList(){

    $this->db->select('expense_detail.*,user.*');
    $this->db->from('expense_detail');
    $this->db->join('user', 'expense_detail.expense_by = user.user_id', 'inner');
    $query = $this->db->get();
  // echo "line 9 expense model file = <pre>"; print_r($query->result()); die;
    return $query->result();




  }


  public function insertExpenseDetail(){

  	/*$query = "INSERT INTO `expense_detail` (`expense_id`, `expense_category`, `expense_amount`, `expense_by`, `description`, `createddate`) VALUES ('1', 'Grosary', '800', '4', 'Ashirwad aata 10kg, arhar daal 1kg, sarso oil 2 ltr, turmric, coriendar powder, besan, face wash, toothpaste, washing powder.', '2018-07-30')";*/
  }

  public function JOINexample(){

  	$this->db->select('tblanswers.*,credentials.*');
    $this->db->from('tblanswers');
    $this->db->join('credentials', 'tblanswers.answerid = credentials.cid', 'right outer'); 
    
	/*

	$this->db->join('credentials', 'tblanswers.answerid = credentials.cid');
	Or

	$this->db->join('credentials', 'tblanswers.answerid = credentials.cid', 'inner');

	*/


    $query = $this->db->get();



    return $query->result();


  }
}
?>