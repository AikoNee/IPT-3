<?php
    $conn = new mysqli('localhost' , 'root' , '' , 'estrera');

    if($conn->connect_error){
        die('ERROR WHILE CONNECTING DATABASE');
    }
?>
