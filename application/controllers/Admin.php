<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct(){
		parent::__construct();
    }

	public function index()
	{
		$this->load->view('welcome_message');
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
		$this->load->view('admin/students/view_students');
    }
    
    public function add_student()
	{
		$this->load->view('admin/students/add_student');
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
