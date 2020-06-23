<?php
session_start();
    require_once ('class/user.php');
    require_once ('class/session.php');


    var_dump($_POST);

    $user = new User();
    if($_POST){
        $result = array_sum($_POST);
    }else{
        $result = 0;
    }
    echo "<pre>";
//    print_r($_SESSION['id']);
//    exit();
    $user->SetResult($_SESSION['id'],$result);

    echo $_SESSION['name']." Ваш результат ---> ".$result;