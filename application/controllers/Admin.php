<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct(){
		parent::__construct();
    }

	public function index()
	{	
		if($this->session->has_userdata('admin_logged')){
			$this->load->view('admin/home');
		} else {
			redirect(base_url().'auth');
		}
	}


}
