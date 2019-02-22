<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function __construct(){
      parent::__construct();
    }
    public function index(){
		  if($this->session->has_userdata('admin_logged')){
        redirect(base_url().'admin');
      } else {
        $this->load->view('admin/login');
      }
    }
    public function verify_login(){
      $username = $this->input->post('username');
      $password = $this->input->post('password');
      echo json_encode($this->auth_model->verify($username, $password));
      // redirect(base_url().'auth');
    }
    public function logout(){
      $this->session->sess_destroy();
      redirect(base_url().'auth');
    }
}
