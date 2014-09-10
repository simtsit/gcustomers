<?php
Class Customer extends CI_Model
{



public function all_customers(){
   $this->db->where(array('active'=>1));
   return $thid->db->get('customers')->result_array();
}

public function get_customer_by_username($username){
   $this->db->where(array('active'=>1));
   $this->db->where('email',$username);
   return $this->db->get('customers')->result_array();
}

public function get_customer_by_vat($vatnumber){
   $this->db->where(array('active'=>1));
   $this->db->where('vat',$vatnumber);
   return $this->db->get('customers')->result_array();
}

public function get_customers_by_city($customercity){
   $this->db->where(array('active'=>1));
   $this->db->where('city',$customercity);
   return $this->db->get('customers')->result_array();
}

public function add_customer(){} //coming soon
public function create_customer(){} //coming soon
public function edit_customer(){} //coming soon
public function update_customer(){} //coming soon

}  