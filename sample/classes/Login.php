<?php

    class Login extends Database{

        public static function admin_login($username, $password){
            $conn = self::conn();
            $query = "SELECT * FROM accounts WHERE username = :username";
            $stmt = $conn->prepare($query);
            $stmt->execute(
                [
                    ':username' => $username
                ]
            );
            if($stmt->rowCount()){
                $datas = $stmt->fetch();
                if(password_verify($password, $datas['password'])){
                    return true;
                }
                return false;  
            }
            return false;
        }
    }