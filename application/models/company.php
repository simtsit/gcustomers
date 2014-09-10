<?php
Class Company extends CI_Model
{



public function all_companies(){
   $this->db->where(array('active'=>1));
   return $thid->db->get('companies')->result_array();
}

public function get_company_by_codename($username){
   $this->db->where(array('active'=>1));
   $this->db->where('codename',$codename);
   return $this->db->get('companies')->result_array();
}

public function get_company_by_vat($vatnumber){
   $this->db->where(array('active'=>1));
   $this->db->where('vat',$vatnumber);
   return $this->db->get('companies')->result_array();
}

public function get_companies_by_city($customercity){
   $this->db->where(array('active'=>1));
   $this->db->where('city',$companycity);
   return $this->db->get('companies')->result_array();
}

public function add_company(){} //coming soon
public function create_company(){} //coming soon
public function edit_company(){} //coming soon
public function update_company(){} //coming soon




}


?>