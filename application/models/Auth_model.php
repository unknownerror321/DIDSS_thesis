<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth_model extends CI_Model {
    public function verify($username, $password){
        $query = $this->db->get_where('accounts', ['username' => $username]);
        if($query->num_rows() > 0){
            $account = $query->row_array();
            if(password_verify($password, $account['password'])){
                $this->set_session($account['account_id']);
                return true;
            }
            return false;
        } 
        return false;
    }
    public function set_session($account_id){
        $datas = [
            'admin_logged'  => true,
            'account_id'    => $account_id
        ];
        $this->session->set_userdata($datas);
    }

}