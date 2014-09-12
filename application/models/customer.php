<?php
Class Customer extends CI_Model
{



public function all_customers(){
   $this->db->where(array('active'=>1));
   return $this->db->get('customers')->result_array();
}

public function get_customer_by_id($customerid){
   $this->db->where(array('active'=>1));
   $this->db->where('id',$customerid);
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

public function add_customer($customerinfo) {
   $this->load->database();
   $customerdetails = array(
      'firstname' => $customerinfo['firstname'],
      'lastname' => $customerinfo['lastname'],
      'middlename' => $customerinfo['middlename'],
      'birthdate' => $customerinfo['birthdate'],
      'city' => $customerinfo['city'],
      'address' => $customerinfo['address'],
      'tel1'=> $customerinfo['tel1'],
      'tel2'=> $customerinfo['tel2'],
      'fax'=> $customerinfo['fax'],
      'proffession'=> $customerinfo['proffession'],
      'vat'=> $customerinfo['vat'],
      'status' => $customerinfo['status'],
      'active'=> 1
   );
   $this->db->insert('customers',$customerdetails);
}

public function edit_customer(){} //coming soon
public function update_customer(){} //coming soon

}  
