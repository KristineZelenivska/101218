<?php
    $connection = mysqli_connect('localhost','root',"",'website'); /*ссылка базы данных, username,пароль, название базы данных*/
    if ($connection) {
        print "we are connected to DB";
    
    }
    else {
        die ("Database connection failed");
    }
?>