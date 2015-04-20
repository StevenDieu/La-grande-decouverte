<?php
session_start();
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Newsletters extends CI_Controller {

	function __construct()
	{
	   	parent::__construct();
	}

    public function edit() {
    	if($this->session->userdata('logged_admin'))
	   	{	
            $this->load->model('newsletter');
            if(!$this->input->get('id')){
                redirect('admin/newsletter/liste', 'refresh');
            }
            $data["newsletter"] = $this->newsletter->getNewsletter($this->input->get('id'));
    		$this->load->helper(array('form'));
    		$data["allCss"] = array("admin/main");
        	$data["alljs"] = array("admin/main");
        	$this->load->templateAdmin('newsletter/edit_newsletter', $data); 
        }
	   	else
	   	{
	     	//If no session, redirect to login page
	     	redirect('admin/index/connexion', 'refresh');
	   	}    
    }

    public function liste() {
    	if($this->session->userdata('logged_admin'))
	   	{	
    		$this->load->helper(array('form'));
            $this->load->model('newsletter');
            $data["newsletters"] = $this->newsletter->getNewsletters();
    		$data["allCss"] = array("admin/main");
        	$data["alljs"] = array("admin/main");
        	$this->load->templateAdmin('/newsletter/list_newsletter', $data);  
        }
	   	else
	   	{
	     	//If no session, redirect to login page
	     	redirect('admin/index/connexion', 'refresh');
	   	}   
    }

}
