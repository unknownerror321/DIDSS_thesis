<?php
    class Database {

        private static $host = 'localhost';
		private static $dbname = 'rfidtest';
		private static $username = 'root';
		private static $password = '';
		private static $conn;

		public static function conn(){
            try{
                $conn = new PDO('mysql:host='.self::$host .';dbname='.self::$dbname, self::$username, self::$password);
                $conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION ); 
                // echo 'succcesss';
                return $conn;
            }catch (PDOException $e){
                echo "Couldn't connect :".$e->getmessage();
            }
        }
    }