<?php
    if(isset($_POST['btn_logout'])){
        session_destroy();
        exit;
    }


?>