<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_model extends CI_Model {

    public function new_user($img_name){
        $arr = [
            'pi_id' => $this->insert_personalinfo($img_name),
            'rfid' => $this->input->post('rfid_input_hldr'),
            'id_no' => '123123123'
        ];
        $this->db->insert('users', $arr);
        return $this->db->insert_id();
    }

    public function insert_student($img_name){
        $this->db->insert('students', ['user_id' => $this->new_user($img_name)]);
    }
    
    public function insert_personalinfo($img_name){
        $fname = $this->input->post('stud_fname');
        $mname = $this->input->post('stud_mname');
        $lname = $this->input->post('stud_lname');
        $gender = $this->input->post('stud_gender');
        $age = $this->input->post('stud_age');
        $datas = [
            'firstname'     => $fname,
            'lastname'      => $lname,
            'middlename'    => $mname,
            'gender'        => $gender,
            'age'           => $age,
            'profile_image' => $img_name
        ];
        $this->db->insert('personal_info', $datas);
        return $this->db->insert_id();
    }

    public function get_users(){
		$this->db->select('*')->from('students');
        $this->db->join('users', 'users.user_id=students.user_id', 'left');
        $this->db->join('personal_info', 'personal_info.pi_id=users.pi_id', 'left');
        return $this->db->get()->result_array();   
	}
}