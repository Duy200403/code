<?php
$action = '';
if(isset($_GET['action'])){
    $action = $_GET['action'];
}

switch ($action){
    case 'login':
        include_once 'model/loginModel.php';
        if(isset($_SESSION['email'])){
            header('Location:index.php');
        } else {
            //            Hiển thị form login
            include_once 'view/login/login.php';
        }
        break;
    case 'loginProcess':
        include_once 'model/loginModel.php';
        if($test == 0){
            header('Location:index.php?controller=admins&action=login');
        } elseif($test == 1) {
            header('Location:index.php');
        }
        break;
    case 'logout':
        include_once 'model/loginModel.php';
        header('Location:index.php?controller=admins&action=login');
        break;
}
?>