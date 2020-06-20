<?php
    class Db{
        public $username = "root";
        public $password = "";
        public $host = "localhost";
        public $db_name = "job";
        public function Connect()
        {
            $link = mysqli_connect($this->host, $this->username, $this->password, $this->db_name);
            if (!$link) {
                die('Error->mysql_connect');
            }
            return $link;
        }
    }
