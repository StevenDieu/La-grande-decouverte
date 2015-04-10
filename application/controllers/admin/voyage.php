<?php
session_start();
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Voyage extends CI_Controller {

	function __construct()
	{
	   	parent::__construct();
	}

    public function add() {
    	if($this->session->userdata('logged_admin'))
	   	{	
    		$this->load->helper(array('form'));
    		$data["allCss"] = array("admin/main");
        	$data["alljs"] = array("admin/main");
        	$this->load->templateAdmin('/voyage/add_voyage', $data); 
        }
	   	else
	   	{
	     	//If no session, redirect to login page
	     	redirect('admin/index/connexion', 'refresh');
	   	}   
    }

    public function edit() {
    	if($this->session->userdata('logged_admin'))
	   	{	
    		$this->load->helper(array('form'));
    		$data["allCss"] = array("admin/main");
        	$data["alljs"] = array("admin/main");
        	$this->load->templateAdmin('/voyage/edit_voyage', $data); 
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
    		$data["allCss"] = array("admin/main");
        	$data["alljs"] = array("admin/main");
        	$this->load->templateAdmin('/voyage/list_voyage', $data);  
        }
	   	else
	   	{
	     	//If no session, redirect to login page
	     	redirect('admin/index/connexion', 'refresh');
	   	}   
    }
}
