<?php
session_start();
    require_once ('class/user.php');
    require_once ('class/session.php');

    if(count($_POST) <= 5){
        header('Location: index.php');
        $_SESSION['result_error_message'] = 'Вы не дали ответы на все вопросы';
    }
    $user = new User();
    if($_POST){
        $result = array_sum($_POST);
    }else{
        $result = 0;
    }

    if($user->SetResult($_SESSION['id'],$result)){
        echo $_SESSION['name']." Ваш результат ---> ".$result;
    }

