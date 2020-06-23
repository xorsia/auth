<?php
session_start();
    require_once ('class/user.php');
    require_once ('class/session.php');

    if(count($_POST)<=1){
        header('Location: index.php');
        //session errror msg...
    }
    $user = new User();
    if($_POST){
        $result = array_sum($_POST);
    }else{
        $result = 0;
    }
    echo "<pre>";

    if($user->SetResult($_SESSION['id'],$result)){
        echo $_SESSION['name']." Ваш результат ---> ".$result;
    }
