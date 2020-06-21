<?php
require_once ('class/session.php');
require_once ('class/user.php');
session_start();

if($_POST["login"]) {
    header("location: user_form.php");
}

if(!is_null($_SESSION['id'])){
    $user = new User();
    if($user->GetSessionId($_SESSION['name']) == $_SESSION['id']){
        header("location: index.php");
    }
}

if($_POST['name'] && $_POST['sure_name'] && $_POST['lust_name']){
    $user = new User();
    $user->Get($_POST['name'], $_POST['sure_name'] ,$_POST['lust_name']);
    if($user->validation()){
        $_SESSION['id'] = $user->user_session_id;
        $_SESSION['name']= $user->user_data['name'];
        $user->NewUser();
    }else{
        echo "Заполните форму правильно";
    }
}
?>

<form method="post">
    <input type="text" placeholder="имя" name="name" >
    <br><br>
    <input type="text" placeholder="фамилия" name="sure_name" >
    <br><br>
    <input type="text" placeholder="отчество" name="lust_name" >
    <br><br>
    <input type="submit" name="login" value="login">
</form>

