<?php
Class Event extends CI_Model
{

public function all_events(){
$this->db->where(array('active'=>1));
return $this->db->get('events')->result_array();
}

public function get_event_by_id($eventid){
$this->db->where(array('active'=>1));
$this->db->where('id', $eventid);
return $this->db->get('events')->result_array();
}

public function get_event_by_id($end_date){
$this->db->where(array('active'=>1));
$this->db->where('end_date', $end_date);
return $this->db->get('events')->result_array();
}

public function get_notes_by_company_id($companyid){
$this->db->where(array('active'=>1));
$this->db->where('company_id', $companyid);
return $this->db->get('events')->result_array();
}

public function get_notes_by_customer_id($custoemid){
$this->db->where(array('active'=>1));
$this->db->where('customer_id',$customerid);
return $this->db->get('events')->result_array();
}

public function add_notes_to_company($notesinfo) {
$this->load->database();
$eventdetails = array(
'company_id' => $eventinfo['company_id'],
'customer_id' => $eventinfo['customer_id'],
'start_date' => $eventinfo['start_date'],
'end_date' => $eventinfo['end_date'],
'text' => $eventinfo['text'],
'status'=> 1,
'active'=> 1
);
$this->db->insert('events',$eventdetails);
}

public function delete_event(){} //coming soon
public function update_event(){} //coming soon
}
