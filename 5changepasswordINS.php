
<html>
    <head>
        <title>JSP Page</title>
    </head>
    <body>
        <?php

            $connection=mysqli('localhost','root','aressam1999');
            mysqli_select_db($connection,"bugtracker") or die("2");


            $pass=$_POST['p1'];
            $pass2=$_POST['p2'];
            $hid=$_POST['hid'];
            $password=$_POST['password'];
            
            $query="SELECT * FROM empreg WHERE password='".$password."' AND mobile='".$hid."'";
            $result=mysqli_query($connection,$query) or die(mysqli_error);

            if(mysqli_num_rows($query) ==1)
            {
               
                $queryupdate="UPDATE empreg SET password='".pass."' WHERE mobile='".hid."'";
                
                mysqli_query($connection,$queryupdate) or die(mysqli_error);                
                header('Location: emphome.php');
                
            }
            else
            {
                header('Location: changepassword.php'); //  ?id2=2                                   ALSO CHECK EXTENSION
            
            }
        
        
            
        ?>
    </body>
</html>
