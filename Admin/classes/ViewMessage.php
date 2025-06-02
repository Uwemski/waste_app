<?php
    require "Db.php";

    class ViewMessage extends Db{
        private $dbconn;


        public function __construct(){
            $this->dbconn = $this->connect();
        }

        //a function for the admin to view messages
        public function view_message(){
            //sql
            $sql = "SELECT * FROM messages"; 
            //prepare
            $stmt = $this->dbconn->prepare($sql);
            //execute
            $stmt->execute();
            //fetch
            $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
            //return
            return $data;

        }

    }

    //testing: Working like Bukayo Saka

    // $view = new ViewMessage();
    // $viewAll = $view->view_message();
    
    
    // echo "<pre>";
    //     print_r($viewAll);
    // echo "</pre>";



?>