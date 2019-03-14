
<html>
    <head>
        <title>Employee home</title>
        <!-- <link href="csspage.css" rel="StyleSheet" type="text/css">   THIS IS A COMMENT, HATA DENA ISKO   -->
    </head>
    <body>
        <?php

            if (!isset($_SESSION['user']))
            {
                header('Location: login.html'); //check extension
            }


            $connection=mysqli('localhost','root','aressam1999');
            mysqli_select_db($connection,"bugtracker") or die("2");


            $query="SELECT * FROM empreg WHERE mobile='".$_SESSION["user"]."'";
            $result=mysqli_query($connection,$query) or die(mysqli_error);
        
            while($row=mysqli_fetch_array($result))
            {
            ?>
        <h1>User : <?=row['name']?></h1>
        <table>
            
            <tr>
                <td><a href="changepassword.php?id=<?=$_SESSION["user"]?>">Change password</a></td>
            </tr>
            <tr>
                <td><a href="reportbug.php?id=<?=$_SESSION["user"]?>">Report a bug</a></td>
            </tr>
            <tr>
                <td><a href="ownbug.php?id=<?=$_SESSION["user"]?>">View bugs I reported</a></td>
            </tr>
            <tr>
                <td><a href="mybugs.php?id=<?=row['eid']?>">View bugs reported to me</a></td>
            </tr>
            <tr>
                <td><a href="view.php?id=<?=row['eid']?>">View all solutions you gave</a></td>
            </tr>
            <tr>
                <td><a href="request.php?id=<?=row['eid']?>">Request to admin</a></td>
            </tr>
            <tr>
                <td><a href="upload.php?id=<?=row['eid']?>">Upload Profile picture</a></td>
            </tr>
            <tr>
                <td><a href="logout.php">Log out</a></td>
            </tr>
        </table>
        <?php
            }
        ?>
    </body>
</html>
