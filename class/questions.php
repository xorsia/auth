<?php
require_once ("db.php");

class Questions extends Db{
    public $data = [];

    public function GetQuestions(){
//        $sql = "SELECT * FROM questions LEFT JOIN answers ON questions.id = answers.q_id";
        $sql = "SELECT * FROM questions";

        $result = mysqli_query(Db::connect(), $sql) or die('mysql error');
        $data = mysqli_fetch_all($result);

        foreach($data as $key){
            $this->data[] = ['name' => $key[1],
                ['data' => $this->GetAnswers($key[0])]
            ];
        }

        if($this->data){
           return $this->data;
        }else{
            return false;
        }
    }

    public function GetAnswers($q_id){
        $sql = "SELECT * FROM answers WHERE q_id ='$q_id'";

        $result = mysqli_query(Db::connect(),$sql) or die('mysql error');

        if($result = mysqli_fetch_all($result)){
            return $result;
        } else{
            return null;
        }
    }
}
