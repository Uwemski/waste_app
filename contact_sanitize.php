<?php
    function sanitize($evilstring){
        $evilstring = htmlentities($evilstring);
        $evilstring = strip_tags($evilstring);
        return $evilstring;
    }

?>