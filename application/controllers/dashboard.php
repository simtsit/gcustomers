<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**  
* This controller is related to homepage (Dashboard).
*
*/

class Dashboard extends CI_Controller {


/** 
*   This fucntion check if user is loged in.
*  If not, it redirects user to login page.
*
*/
	public function __construct () {
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
	public function index()
	{

		 function __construct() {
		   parent::__construct();
		 }

		$data['title'] = 'Dashboard';
		$data['active'] = 'Dashboard';		

		$data['active_user'] = $this->user->active_user_details($_SESSION['username']);

		$this->load->view('dashboard', $data);

	}
}

/* End of file dashboard.php */
/* Location: ./application/controllers/dashboard.php */