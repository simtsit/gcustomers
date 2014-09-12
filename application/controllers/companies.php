<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
* This controller is related to homepage (Dashboard).
*
*/
class Companies extends CI_Controller {

	/**
	* This fucntion check if user is loged in.
	* If not, it redirects user to login page.
	*
	*/
	public function __construct (){
		session_start();
		parent::__construct();
		if (!isset($_SESSION['username'])) {
			redirect('login');
		}
	}

	/**
	* Index Page for this controller.
	*
	*/
	public function index()	{
		function __construct() {
			parent::__construct();
		}
		$data['title'] = 'Companies';
		$data['active'] = 'Companies';	
		$data['active_user'] = $this->user->active_user_details($_SESSION['username']);
		$data['companies'] = $this->company->all_companies();
		$this->load->view('companies', $data);
	}


	public function create(){
		$data['title'] = 'Companies';
		$data['active'] = 'Companies';	

		$data['active_user'] = $this->user->active_user_details($_SESSION['username']);
				
		$this->load->view('add_company_form', $data);
	}

	public function profile($companyid='')	{
		$data['title'] = 'Companies';
		$data['active'] = 'Companies';	

		$data['active_user'] = $this->user->active_user_details($_SESSION['username']);
		
		$data['companies'] = $this->company->get_company_by_id($companyid);
		
		$this->load->view('display_company_profile', $data);
	}




}
/* End of file companies.php */
/* Location: ./application/controllers/companies.php */
