<?php
require_once ('class/questions.php');
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
echo "<hr>";

$q = new Questions();
$data = $q->GetQuestions();
echo "<pre>";
for($i=0;$i<count($data);$i++){
    echo($data[$i]['name'])."<br>";
    echo "<hr>";
    echo "<hr>";
    for($j=0;$j<count($data[$i][0]['data']);$j++){
        echo "<hr>";
        print_r($data[$i][0]['data'][$j][2]);
        echo "<br>";
    }
    echo "<hr>";
}


?>

