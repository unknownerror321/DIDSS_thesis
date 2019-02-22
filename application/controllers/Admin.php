<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct(){
		parent::__construct();
    }

	public function index()
	{	
		if($this->session->has_userdata('admin_logged')){
			$this->load->view('admin/dashboard');
		} else {
			redirect(base_url().'auth');
		}
	}

  	public function dashboard()
	{
		$this->load->view('admin/dashboard');
    }
    
    /* Staffs */
  	public function view_staffs()
	{
		$this->load->view('admin/staffs/view_staffs');
    }
    
  	public function add_staff()
	{
		$this->load->view('admin/staffs/add_staff');
    }
    
    /* Students */
    public function view_students()
	{	
		if($this->session->has_userdata('admin_logged')){
			$this->load->view('admin/students/view_students');
		} else {
			redirect(base_url().'auth');
		}
    }
    
  	public function add_student()
	{	
		if($this->session->has_userdata('admin_logged')){
			$this->load->view('admin/students/add_student');
		} else {
			redirect(base_url().'auth');
		}
		
    }
    
    /* Teachers */
    public function view_teachers()
	{
		$this->load->view('admin/teachers/view_teachers');
    }
    
    public function add_teacher()
	{
		$this->load->view('admin/teachers/add_teacher');
	}

}
