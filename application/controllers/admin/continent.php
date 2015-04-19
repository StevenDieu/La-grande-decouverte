<?php
session_start();
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Continent extends CI_Controller {

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
        	$this->load->templateAdmin('/continent/add_continent', $data); 
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
            $this->load->model('voyage');
            if(!$this->input->get('id')){
                redirect('admin/continent/liste', 'refresh');
            }
            $data["continent"] = $this->voyage->getContinent($this->input->get('id'));
    		$this->load->helper(array('form'));
    		$data["allCss"] = array("admin/main");
        	$data["alljs"] = array("admin/main");
        	$this->load->templateAdmin('/continent/edit_continent', $data); 
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
            $this->load->model('voyage');
            $data["continents"] = $this->voyage->getContinents();
    		$data["allCss"] = array("admin/main");
        	$data["alljs"] = array("admin/main");
        	$this->load->templateAdmin('/continent/list_continent', $data);  
        }
	   	else
	   	{
	     	//If no session, redirect to login page
	     	redirect('admin/index/connexion', 'refresh');
	   	}   
    }
}
