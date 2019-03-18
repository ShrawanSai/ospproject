
<html>
    <head>
  
        <title>Bugs you reported</title>
        <link href="csspage.css" rel="StyleSheet" type="text/css"> 
    </head>
    <body>
        <?php
            
            $connection=mysqli_connect('localhost','root','aressam1999');
            mysqli_select_db($connection,"bugtracker") or die("2");
            $q="SELECT * FROM bugs WHERE rby='".$_POST['id']."' AND active='y'";
            $result=mysqli_query($connection,$q) or die(mysqli_error);
        
        ?>
        <h1 align="center">Bugs that you reported</h1>
        <table class="table2">
            <tr>
                <td>Bug title</td>
                <td>Bug description</td>
                <td>Edit :</td>
                <td>View the comments :</td>
            </tr>
            <?php
            while($row=mysqli_fetch_array($result))
            {    
            ?>
            <tr>
                <td><?=$row['bug']?></td>
                <td><?=$row['bugdes']?></td>
                <td><a href="editbug.php?id=<?=$row['bugid']?>">Edit</a></td>
                <td><a href="viewcomment.php?id=<?=$row['bugid']?>&id2=<?=$_POST['id']?>">View</a></td>
            </tr>
            <?php
                        }
            ?>
            <tr>
                <td><a href="emphome.php">Back</a></td>
            </tr>
        </table>
    </body>
</html>
