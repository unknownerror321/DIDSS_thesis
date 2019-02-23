<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Logs extends CI_Controller {

	public function __construct(){
		parent::__construct();
	}
	public function index(){
		// $datas['studs'] = $this->logs_model->get_student($user_id);
		$this->load->view('logs/logs_view');
	}

	public function get_logs($rfid){
		$datas = $this->logs_model->get_student($rfid);
		echo json_encode($datas);
	}

	public function addlogs($userid){
		$this->logs_model->new_log($userid);
		return true;
	}

	public function get_last_logs(){
		$datas = $this->logs_model->get_last_logs();
		echo json_encode($datas);
	}
}
