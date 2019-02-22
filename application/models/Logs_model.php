<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Logs_model extends CI_Model {
    public function get_allusers(){

    }

    public function get_student($rfid){
        $this->db->select('*')->from('students');
        $this->db->join('users', 'users.user_id = students.user_id');
        $this->db->join('personal_info', 'personal_info.pi_id = users.pi_id');
        $this->db->where('users.rfid', $rfid);
        return $this->db->get()->result_array();
    }

    public function get_teacher(){
        
    }

    public function get_staff(){
        
    }
}