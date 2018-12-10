<?php
include "database.php";
print "<br>";
 //print_r($_POST);
if (isset($_POST["submit"])){ 
$error=false;

  print_r($_POST); //вывели сверху страницы введенные переменные
if (strlen($_POST["username"])<8){ //имя должно быть не меньше 8. комп это проверяет и есть оно меньше, то выдает то что мы написали 
  
  $error=true;
  print "username incorect";
}
if (strlen($_POST["username"])>64){
  $error=true;
  print "username incorect";
}
if (strlen($_POST["password"])<8){
  $error=true;
  print "password incorect";
}
if ($error== false){
    $username = $_POST["username"];
    $password = $_POST["password"];
    $query = "INSERT INTO `users` (`index`, `username`, `password`, `created`) ";
    $query .= " VALUES (NULL, '$username', '$password', CURRENT_TIMESTAMP);";
    $result = mysqli_query($connection, $query);
    if(!$result){
        die ("Query failed!".mysqli_error());
    } else {print "<br>User saved!";
    }

}
}

?>
