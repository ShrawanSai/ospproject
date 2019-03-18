
<html>
    <head>
    
	

    <!-- <link href="csspage.css" rel="StyleSheet" type="text/css"> -->
    </head>
    <body>
        <?php

            $connection=mysqli_connect ('localhost','root','aressam1999');
            mysqli_select_db($connection,"bugtracker") or die("2");


            
            $query1="SELECT * FROM project WHERE status='y'";
            $result1=mysqli_query($connection,$query1) or die(mysqli_error);
            

            $query2="SELECT * FROM empreg";
            $result2=mysqli_query($connection,$query2) or die(mysqli_error);
            

            $query3="SELECT * FROM empreg";
            $result3=mysqli_query($connection,$query3) or die(mysqli_error);
            
        ?>
        <h1 align="center">Report a bug:</h1>
        <form action="reportbugINS.php" method="post">
            <table>
                <tr>
                    <td>Project : </td>
                    <td>
                        <select name=project>
                            <option value="sel">sel</option>
                            <?php 
                            while($row=mysqli_fetch_array($result1))
                            {
                            ?>
                            <option value="<?=$row['pid']?>"><?=$row['proname']?></option>
                            <?php
                            }
                            ?>
                        </select>
                    </td>
                </tr>
                <tr><td><br></td>
                    <td><br></td>
                </tr>
                <tr>
                    <td>Bug name</td>
                    <td><input type="text" name=bug></td>
                </tr>
                <tr><td><br></td>
                    <td><br></td>
                </tr>
                <tr>
                    <td>Bug description</td>
                    <td><textarea name=bugdes></textarea></td>
                </tr>
                <tr><td><br></td>
                    <td><br></td>
                </tr>
                <tr>
                    <td>Assign bug to : </td>
                    <td>
                        <select name=assign>
                            <option value="sel">sel</option>
                            <?php 
                            while($row=mysqli_fetch_array($result2))
                            {
                            ?>
                            <option value="<?=$row['eid']?>"><?=$row['name']?></option>
                            <?php
                            }
                            ?>
                        </select>
                    </td>
                </tr>
                <tr><td><br></td>
                    <td><br></td>
                </tr>
                
                <tr>
                    <td>Priority:</td>
                    <td>
                        <input type="radio" name=status value="H" checked>High<br>
                        <input type="radio" name=status value="M">Medium<br>
                        <input type="radio" name=status value="L">Low
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="hidden" value="<?=$_SESSION['user']?>" name=hid><input type="submit" value="Report"></td>
                </tr>
                <tr>
                    <td><a href="emphome.php">Back</a></td>
                </tr>
            </table>
        </form>
    </body>
</html>
