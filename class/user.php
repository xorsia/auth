<?php
require_once ('db.php');
    class User extends Db{
        public $user_data = [];
        public $user_session_id;

        public function Get($name,$sure_name,$lust_name){
            $this->user_data = array(
                'name' => $name,
                'sure_name' => $sure_name,
                'lust_name' => $lust_name,
            );
            return true;
        }

        public function validation(){
            $this->user_data = preg_grep('/^[a-zA-Zа-яА-Я]+$/ui',$this->user_data);
            if(!empty($this->user_data)){
                $this->user_session_id = md5($this->user_data['sure_name']);
                return true;
            }else{
                return false;
            }
        }

        public function NewUser(){
                $sql = mysqli_query(Db::Connect(), "INSERT INTO `users` (`name`, `sure_name`,`lust_name`, `session_id`) VALUES ('{$this->user_data['name']}', '{$this->user_data['sure_name']}', '{$this->user_data['lust_name']}', '{$this->user_session_id}')");
                return true;
        }

        public function GetSessionId($username){
            $sql = mysqli_query(Db::connect(),"SELECT session_id FROM `users` WHERE `name` = '$username' ") or die('error mysql GETSESSIONID');
            $session_id = mysqli_fetch_array($sql);

            if($session_id['session_id']){
                return $session_id['session_id'];
            }else{
                return false;
            }
        }
    }