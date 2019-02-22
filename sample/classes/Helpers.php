<?php
    class Helpers {
        public static function rediret($url){
            header("Location: $url");
        }
    }