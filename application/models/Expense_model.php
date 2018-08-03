<?php
class Expense_model extends CI_model{

  public function getAllExpenseList(){

    $this->db->select('expense_detail.*,user.*,expense_category.*');
    $this->db->from('expense_detail');
    $this->db->join('expense_category', 'expense_detail.  expense_category = expense_category.expense_category_id', 'inner');
    $this->db->join('user', 'expense_detail.expense_by = user.user_id', 'inner');
    $this->db->where('expense_detail.deleted','0');
    $this->db->order_by("expense_id", "ASC");
    $query = $this->db->get();

    return $query->result();
  }

  public function getAllExpenseCategoryList(){

    $this->db->select('*');
    $this->db->from('expense_category');
    $this->db->where('deleted','0');
    $this->db->order_by("expense_category_id", "ASC");
    $query = $this->db->get();

    return $query->result();
  }

  public function insert_fresh_expense($fresh_expense){

    $this->db->set('createddate', 'NOW()', FALSE);
    $this->db->insert('expense_detail', $fresh_expense);

  }


}
?>