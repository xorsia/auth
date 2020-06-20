<?php
class Session{
    public function Set($user_session_id){
        if($user_session_id){
            $_SESSION['id'] = $user_session_id;
        }
        return true;
    }
    public function Delete(){
        $_SESSION['id'] = null;
    }
    public function CheckUserSession($session_id){
        if($_SESSION['id'] == $session_id){
            return true;
        } else {
            return false;
        }
    }
}
