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
            $data['get_users'] = $this->admin_model->get_users();
            $this->load->view('admin/students/view_students', $data);
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
	
	public function insert_student(){
        $path = $_FILES['input_img']['name'];
        $imgName = 'profile_'.uniqid().'.'.pathinfo($path, PATHINFO_EXTENSION);
        $config = array(
            'upload_path' => "assets/images/profile",
            'allowed_types' => "gif|jpg|png|jpeg",
            'overwrite' => TRUE,
            'file_name' => $imgName
        );

        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        $this->upload->set_allowed_types('*');

        // $old_image = $this->input->post('old_image');
        // if($old_image!='default_img.gif'){
        // 	unlink("assets/images/profile/".$old_image);
        // }
        
        if (!urldecode($this->upload->do_upload('input_img'))) {
            $this->session->set_flashdata('error', $this->upload->display_errors());
            redirect(base_url().'admin/view_students');
        } else { 
            $newdatas = $this->admin_model->insert_student($imgName);
            if($newdatas){
                $this->session->set_flashdata('success', 'New users was successfully added.');
                redirect(base_url().'admin/view_students');
            } else{
                $this->session->set_flashdata('error', 'There was a problem adding users.');
                redirect(base_url().'admin/view_students');
            }
        }
			
		// $newdatas = $this->admin_model->insert_student();
		// redirect(base_url().'admin/view_students');
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
