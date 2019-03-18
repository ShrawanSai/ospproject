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
            $rby=$_POST['rby'];
            $connection=mysqli_connect('localhost','root','aressam1999');
            mysqli_select_db($connection,"bugtracker") or die("2");

            $q="INSERT INTO bugs(project,bug,bugdes,assign,status,rby,active) Value('".$project."','".$bug."','".$bugdes."','".$assign."','".$status."','".$rby."','y')";
            mysqli_query($connection,$q) or die(mysqli_error);
        
            header('Location: emphome.php');
        %>
    </body>
</html>
