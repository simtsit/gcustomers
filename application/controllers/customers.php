<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**  
* This controller is related to homepage (Dashboard).
*
*/

class Customers extends CI_Controller {


/** 
*   This fucntion check if user is loged in.
*  If not, it redirects user to login page.
*
*/
	public function __construct ()
	{
		session_start();
		parent::__construct();

		if (!isset($_SESSION['username']))
		{
			redirect('login');
		}
	}



	/**
	 * Index Page for this controller.
	 *
	 */
	public function index()
	{

		 function __construct() {
		   parent::__construct();
		 }
		 
		$data['title'] = 'Customers';
		$data['active'] = 'Customers';		

		$data['active_user'] = $this->user->active_user_details($_SESSION['username']);

		$data['customers'] = $this->customer->all_customers();

		$this->load->view('customers', $data);

	}


	public function create(){
		$data['title'] = 'Customers';
		$data['active'] = 'Customers';	

		$data['active_user'] = $this->user->active_user_details($_SESSION['username']);
				
		$this->load->view('add_customer_form', $data);
	}


	public function profile($customerid=''){

		
		$data['title'] = 'Customer Profile';
		$data['active'] = 'Customers';

		$data['active_user'] = $this->user->active_user_details($_SESSION['username']);

		$data['customers'] = $this->customer->get_customer_by_id($customerid);
		
		$this->load->view('display_customer_profile',$data);
	}


}

/* End of file customers.php */
/* Location: ./application/controllers/customers.php */
