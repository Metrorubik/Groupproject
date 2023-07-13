<?php

    $database= new mysqli("localhost","root","","limbe_medical_clinic");
    if ($database->connect_error){
        die("Connection failed:  ".$database->connect_error);
    }

?>