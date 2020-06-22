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
echo "<br>";

$q = new Questions();
$data = $q->GetQuestions();

for($i=0;$i<count($data);$i++){
    echo "<p>".($data[$i]['name'])."</p><br>";

    for($j=0;$j<count($data[$i][0]['data']);$j++){
        echo "<form method='post'>";
        echo "<input type='checkbox' name='answer' value='0 .'>".$data[$i][0]['data'][$j][2];
        echo "<br>";
        echo "</form>";

//        print_r($data[$i][0]['data'][$j][2]);

        echo "<br>";
    }
    echo "<hr>";
}
?>

