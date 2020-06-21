<?php
require_once ("db.php");

class Questions extends Db{
    public $data = [];

    public function GetQuestions(){

        $sql = "SELECT * FROM  answers INNER JOIN questions ON answers.q_id = questions.id";
        $result = mysqli_query(Db::connect(), $sql) or die('mysql error');
        $data = mysqli_fetch_all($result);
        

        $this->data = $data;
        echo "<pre>";
        print_r($this->data);
        exit();
    }
}
