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
        return $this->db->get()->row_array();
    }

    public function get_teacher(){
        
    }

    public function get_staff(){
        
    }

    public function new_log($user_id){
        $arr = [
            'user_id'   => $user_id,
            'type'      => 0
        ];
        $this->db->insert('logs', $arr);
    }

    public function get_last_logs(){
        $this->db->select('*')->from('logs');
        $this->db->join('users', 'users.user_id = logs.user_id');
        $this->db->join('personal_info', 'personal_info.pi_id = users.pi_id');
        $this->db->order_by('logs.log_id', 'desc');
        $this->db->limit(3);
        return $this->db->get()->result_array();
    }
}