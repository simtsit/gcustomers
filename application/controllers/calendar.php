<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
* This controller is related to Calendar page.
*
*/
	class Calendar extends CI_Controller {
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

			$data['title'] = 'Calendar';
			$data['active'] = 'Calendar';	

			$data['active_user'] = $this->user->active_user_details($_SESSION['username']);
			
			$this->load->view('calendar', $data);
		}

	}
/* End of file calendar.php */
/* Location: ./application/controllers/calendar.php */