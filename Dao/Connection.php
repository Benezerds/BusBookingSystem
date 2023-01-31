<?php
        $hostname="localhost";
        $user="root";
        $password="";
        $database="buskaro";

        $conn=new mysqli($hostname,$user,$password,$database);

        return $conn;

        if($conn->connect_errno){
            echo "Connection failed: (" .$conn->connect_errno . ") " . $conexao->connect_error;
        }


?>