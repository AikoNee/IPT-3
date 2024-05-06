<?php

    include "dbconn.php";

    if(isset($_POST['username']) && isset($_POST['password'])){

        $username = $_POST['username'];
        $password = $_POST['password'];

        if(empty($username)){
            header("Location: index.php?param=Username is required");
            exit();
        }
        if(empty($password)){
            header("Location: index.php?param=Password is required");
            exit();
        }

        $query1 = $conn->query("SELECT ( ID ) FROM midterm WHERE usrname='$username' AND passwd='$password'");
       if($query1->num_rows  > 0){
            header("Location: home.php?user=$username");
            exit();
        }else {
            header("Location: index.php?param=Account not found");


        }

    }

    