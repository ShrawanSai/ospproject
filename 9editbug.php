
<html>
    <head>
        <title>Edit bug</title>
        <link href="csspage.css" rel="StyleSheet" type="text/css">
    </head>
    <body>
        <?php
            $id=$_POST['id'];
            $connection=mysqli_connect('localhost','root','aressam1999');
            mysqli_select_db($connection,"bugtracker") or die("2");


            $q="SELECT * FROM project WHERE status='y'";
            $result=mysqli_query($connection,$q) or die(mysqli_error);
            

            $q2="SELECT * FROM empreg";
            $result2=mysqli_query($connection,$q2) or die(mysqli_error);
            
       
            $q3="SELECT * FROM empreg";
            $result3=mysqli_query($connection,$q3) or die(mysqli_error);

          
            $q4="SELECT * FROM bugs WHERE bugid='".$_POST['id']."'";                 //check dis
            $result4=mysqli_query($connection,$q4) or die(mysqli_error);

            while($row4=mysqli_fetch_array($result4))
            {
        ?>
        <h1 align="center">Edit this bug</h1>
        <form action="editbugINS.php" method="post">
            <table class="table2">
                <tr>
                    <td>Do you want to revoke this bug?</td>
                    <td> <input type="radio" name=active value="n">Yes<br>
                         <input type="radio" name=active value="y" checked>No
                    </td>
                </tr>
                <tr><td><br></td>
                    <td><br></td></tr>
                <tr>
                    <td>Project : </td>
                    <td>
                        <select name=project>
                            <?php 
                            while($row1=mysqli_fetch_array($result))
                            {
                                if($row1['pid'] contains $row4['project'])
                                {
                            ?>
                            <option value="<?=$row1['pid']?>" selected><?=$row1['proname']?></option>
                            <?php
                            }
                            else
                                {
                            ?>
                            <option value="<?=$row1['pid']?>"><?=$row1['proname']?></option>
                            <?php
                                }
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
                    <td><input type="text" name=bug value="<?=$row4['bug']?>"></td>
                </tr>
                <tr><td><br></td>
                    <td><br></td>
                </tr>
                <tr>
                    <td>Bug description</td>
                    <td><textarea name=bugdes><?=$row4['bugdes']?></textarea></td>
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
                            while($row2=mysqli_fetch_array($result2))
                            {
                                if($row2['eid'] contains $row4['assign'])
                                {
                            ?>
                            <option value="<?=$row2['eid']?>" selected><?=$row2['name']?></option>
                            <?php
                            }
                                else
                                {
                            ?>
                            <option value="<?=$row2['eid']?>"><?=$row2['name']?></option>
                            <?php
                                }
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
                        <?php
                        if($row4['status'] contains "H")
                        {
                        ?>
                        <input type="radio" name=status value="H" checked>High<br>
                        <input type="radio" name=status value="M">Medium<br>
                        <input type="radio" name=status value="L">Low
                        <?
                        }
                        else if($row4['status'] contains "M")
                        {
                        ?>
                        <input type="radio" name=status value="H">High<br>
                        <input type="radio" name=status value="M" checked>Medium<br>
                        <input type="radio" name=status value="L">Low
                        <?php
                        }
                        else
                        {
                        ?>
                        <input type="radio" name=status value="H">High<br>
                        <input type="radio" name=status value="M">Medium<br>
                        <input type="radio" name=status value="L" checked>Low
                        <?php
                        }
                        ?>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="hidden" value="<?=$id?>" name=hid2>
                        <input type="hidden" value="<?=$_SESSION['user']?>" name=hid><input type="submit" value="Submit change"></td>
                    
                </tr>
                <tr>
                    <td><a href="emphome.php">Back</a></td>
                    <td></td>
                </tr>
            </table>
        </form>
    <?php
        }
    ?>
    </body>
</html>
