<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_model extends CI_Model {

    public function new_user(){
        $arr = [
            'pi_id' => $this->insert_personalinfo(),
            'rfid' => $this->input->post('rfid_input_hldr'),
            'id_no' => '123123123'
        ];
        $this->db->insert('users', $arr);
        return $this->db->insert_id();
    }

    public function insert_student(){
        $this->db->insert('students', ['user_id' => $this->new_user()]);
    }
    
    public function insert_personalinfo(){
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
            'profile_image' => 'sample'
        ];
        $this->db->insert('personal_info', $datas);
        return $this->db->insert_id();
    }
}