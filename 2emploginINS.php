<?php
    $user=$_POST['user'];

    $pass=$_POST['pass'];

    $connection=mysqli('localhost','root','aressam1999');
    mysqli_select_db($connection,"bugtracker") or die("2");

    $query="SELECT * FROM empreg WHERE mobile='".$user."' AND password='".$pass."'";

    $result=mysqli_query($connection,$query) or die(mysqli_error);


    if(mysqli_num_rows($query) > 0 )
    {
        session_start();
        $_SESSION["user"]=$user;
        header('Location: emphome.php'); //check extension
    }
    else
    {
        header('Location: emplogin.php');//check extension  ?id1=1
    }

?>