<?php
    include "dbconn.php";

    if(isset($_POST['post'])){

        $post = $_POST['post'];
        $author = $_POST['author'];

        if(empty($post)){
            header("Location: ./index.php?error=Login first!");
        }

            $query = $conn->query("INSERT INTO comments( AUTHOR , Post ) VALUES ( '$author' , '$post') ");
            if($query== false){
            header("Location: ./index.php?error=Database error");
            }
        header("Location: ./home.php?user=$author");
            

    }
    ?>