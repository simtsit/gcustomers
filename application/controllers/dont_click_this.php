<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
* This controller is related to don't click this page.
*
*/
	class Dont_click_this extends CI_Controller {
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

			$data['title'] = 'Dont Click This';
			$data['active'] = 'Dontclickthis';	

			$data['active_user'] = $this->user->active_user_details($_SESSION['username']);
			
			$this->load->view('dont_click_this', $data);
		}

	}
/* End of file dont_click_this.php */
/* Location: ./application/controllers/dont_click_this.php */