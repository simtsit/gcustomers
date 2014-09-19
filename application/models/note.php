<?php
Class Note extends CI_Model
{
public function all_notes(){
$this->db->where(array('active'=>1));
return $this->db->get('notes')->result_array();
}

public function get_notes_by_company_id($companyid){
$this->db->where(array('active'=>1));
$this->db->where('company_id', $companyid);
return $this->db->get('notes')->result_array();
}

public function get_notes_by_customer_id($custoemid){
$this->db->where(array('active'=>1));
$this->db->where('customer_id',$customerid);
return $this->db->get('notes')->result_array();
}

public function add_notes_to_company($notesinfo) {
$this->load->database();
$notedetails = array(
'company_id' => $notesinfo['company_id'],
'customer_id' => $notesinfo['customer_id'],
'text' => $notesinfo['text'],
'status'=> 1,
'active'=> 1
);
$this->db->insert('notes',$notedetails);
}

public function delete_note(){} //coming soon
public function update_note(){} //coming soon
}
