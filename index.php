<?php
require_once ('class/questions.php');

$q = new Questions();
$q->GetQuestions();

require_once ('class/session.php');
require_once ('class/user.php');
session_start();
$user = new User();
if(is_null($_SESSION['id'])){
    header("location: user_form.php");
} elseif ($user->GetSessionId($_SESSION['name']) != $_SESSION['id']){
    header("location: user_form.php");
}
echo "WELLCOME TO THE VICTORINA ".$_SESSION['name'];


?>

