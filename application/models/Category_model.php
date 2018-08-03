<?php
class Category_model extends CI_model{

  public function getAllCategoryList(){

    $this->db->select('*');
    $this->db->from('expense_category');
    $this->db->where('deleted','0');
    $this->db->order_by("expense_category_id", "ASC");
    $query = $this->db->get();

    return $query->result();
  }

  public function insert_fresh_category($fresh_category){

    $this->db->insert('expense_category', $fresh_category);

  }

}
?>