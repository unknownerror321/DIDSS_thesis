<?php
    require_once 'classes/Helpers.php';
    require_once 'classes/Database.php';
    require_once 'classes/Login.php';

    Login::admin_login('admin', 'asdasd');
    if(isset($_POST['btn_login'])){
        $verify = Login::admin_login($_POST['login_username'], $_POST['login_password']);
        if($verify){
            Helpers::redirect('scan.php');
        }
    }
?>
<!doctype html>
<html lang="">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Login | Propeller - Admin Dashboard">
<meta content="width=device-width, initial-scale=1, user-scalable=no" name="viewport">
<title>Login | Propeller - Admin Dashboard</title>
<link rel="shortcut icon" type="image/x-icon" href="themes/images/favicon.ico">
<!-- Google icon -->
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<!-- Bootstrap css -->
<link rel="stylesheet" type="text/css" href="dist/assets/css/bootstrap.min.css">
<!-- Propeller css -->
<link rel="stylesheet" type="text/css" href="dist/assets/css/propeller.min.css">
<!-- Propeller theme css-->
<link rel="stylesheet" type="text/css" href="dist/themes/css/propeller-theme.css" />
<!-- Propeller admin theme css-->
<link rel="stylesheet" type="text/css" href="dist/themes/css/propeller-admin.css">
</head>
<body class="body-custom">