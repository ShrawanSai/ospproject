
<!DOCTYPE html>
<html>
    <head>
  
        <title>Employee login</title>
        
    </head>
    <body>
        <h1 align="center">Employee login</h1>
        <form action="emploginINS.php" method="post">
            <table class="table2">
                <tr>
                    <td>Username:</td>
                    <td><input type="text" name=user></td>
                </tr>
                <tr>
                    <td>Password:</td>
                    <td><input type="password" name=pass></td>
                </tr>
                <tr><td><input type="submit" value="Log-in"></td></tr>
            </table>
        </form>

            <?php /*   <br>
                <br>
                <?php
            if(request.getParameter("id1")!=null)
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
