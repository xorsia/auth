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
$q = new Questions();
$data = $q->GetQuestions();

echo "WELLCOME TO THE VICTORINA ".$_SESSION['name'];
echo "<br>";

echo "<form method='Post' action='result.php'>";
for($i=0;$i<count($data);$i++){
    echo "<p>".($data[$i]['name'])."</p><br>";
    for($j=0;$j<count($data[$i][0]['data']);$j++){
        $value = $data[$i][0]['data'][$j][3];
        $input_name  = "answer_".$i;
        echo "<input type='radio' name=$input_name value=$value />".$data[$i][0]['data'][$j][2];
        echo "<br>";
        echo "<br>";
    }
    echo "<hr>";
}
echo "<input type='submit' name='send_test' value='закончить тест'>";
echo "</form>";
?>

