
<html>
    <head>

        <title>JSP Page</title>
    </head>
    <body>
        <?php
            
            $project=$_POST['project'];
            $bug=$_POST['bug'];
            $bugdes=$_POST['bugdes'];
            $assign=$_POST['assign'];
            $status=$_POST['status'];
            $rby=$_POST['hid'];
            $active=$_POST['active'];
            $hid2=$_POST['hid2'];

            $connection=mysqli('localhost','root','aressam1999');
            mysqli_select_db($connection,"bugtracker") or die("2");


            $q="UPDATE bugs SET active='".$active."',project='".$project."',bug='".$bug."',bugdes='".$bugdes."',assign='".$assign."',status='".$status."',rby='".$rby."' WHERE bugid=",$hid2;
            mysqli_query($connection,$q) or die(mysqli_error);
            header('Location: ownbug.php?id=',$rby);

            //response.sendRedirect("ownbug.jsp?id="+rby);     CHECK rby DATATYPE
        ?>
    </body>
</html>
