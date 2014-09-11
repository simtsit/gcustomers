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

public function add_company($companyinfo) {
$this->load->database();
$companydetails = array(
'status' => $companyinfo['status'],
'codename' => $companyinfo['codename'],
'name' => $companyinfo['name'],
'city' => $companyinfo['city'],
'address' => $companyinfo['address'],
'tel1'=> $companyinfo['tel1'],
'tel2'=> $companyinfo['tel2'],
'fax'=> $companyinfo['fax'],
'vat'=> $companyinfo['vat'],
'active'=> 1
);
$this->db->insert('companies',$companydetails);
}

public function edit_company(){} //coming soon
public function update_company(){} //coming soon


}
