<?php
$id=$_POST['id'];  //CHECK NAME
?>
<html>
    <head>
        <title>Change password</title>
        <!-- <link href="csspage.css" rel="StyleSheet" type="text/css"> -->
    </head>
    <body>
        <form action="changepasswordINS.php" method="post">
            <table>
                <tr>
                    <td>Enter old password</td>
                    <td><input type="password" name=password></td>
                </tr>
                <tr>
                    <td>Enter new password</td>
                    <td><input type="password" name=p1></td>
                </tr>
                <tr>
                    <td>Confirm new password</td>
                    <td><input type="password" name=p2></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="hidden" value="<?=$id?>" name="hid"><input type="submit" value="change"></td>
                </tr>
                <tr><td> <a href="emphome.php">Back</a></td></tr>
            </table>
        </form>
               
                <br>
                <br>
                <?php /*
            if(request.getParameter("id2")!=null)
            {
                ?>
            
            <font color="red">
            Problem in updating password.<br>Please enter correct password.
            </font>           
            <%}
        %>
        */ ?>
    </body>
</html>
