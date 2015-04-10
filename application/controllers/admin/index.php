<?php
session_start();
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Index extends CI_Controller {

	function __construct()
	{
	   	parent::__construct();
	   	$this->load->model('user','',TRUE);
	}

    public function connexion() {
    	if(!$this->session->userdata('logged_admin'))
	   	{
    	$this->load->helper(array('form'));
    	$data["allCss"] = array("admin/main");
        $data["alljs"] = array("admin/main");
        $this->load->templateAdmin('/connexion', $data); 
        }
	   	else
	   	{
	     	//If no session, redirect to login page
	     	redirect('admin/index/dashboard', 'refresh');
	   	}   
    }

     function login()
	 {
	   //This method will have the credentials validation
	   $this->load->library('form_validation');
	 
	   $this->form_validation->set_rules('username', 'Username', 'trim|required|xss_clean');
	   $this->form_validation->set_rules('password', 'Password', 'trim|required|xss_clean|callback_check_database');
	 
	   if($this->form_validation->run() == FALSE)
	   {
	     //Field validation failed.  User redirected to login page
	     $this->load->view('admin/connexion');
	   }
	   else
	   {
	     //Go to private area
	     redirect('admin/index/dashboard', 'refresh');
	   }
	 
	 }

	function check_database($password)
 	{
		//Field validation succeeded.  Validate against database
		$username = $this->input->post('username');

		//query the database
		$result = $this->user->loginAdmin($username, $password);

		if($result)
		{
			$sess_array = array();
			foreach($result as $row)
			{
			$sess_array = array(
				'id' => $row->id,
				'username' => $row->login
			);

			$this->session->set_userdata('logged_admin', $sess_array);
			}
			return TRUE;
		}
		else
		{
			$this->form_validation->set_message('check_database', 'Invalid username or password');
			return false;
		}
	}

	 function dashboard()
	 {
	   if($this->session->userdata('logged_admin'))
	   {
	     	$session_data = $this->session->userdata('logged_admin');
	     	$data['username'] = $session_data['username'];
	     	$this->load->templateAdmin('dashboard', $data); 
	   }
	   else
	   {
	     	//If no session, redirect to login page
	     	redirect('admin/index/connexion', 'refresh');
	   }
	 }

	 function logout()
	 {
	   	$this->session->unset_userdata('logged_admin');
	   	session_destroy();
	   	redirect('admin/index/connexion', 'refresh');
	 }

    
}
