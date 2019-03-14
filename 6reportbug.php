
<html>
    <head>
    

    <!-- <link href="csspage.css" rel="StyleSheet" type="text/css"> -->
    </head>
    <body>
        <?php

            $connection=mysqli('localhost','root','aressam1999');
            mysqli_select_db($connection,"bugtracker") or die("2");


            
            $query1="SELECT * FROM project WHERE status='y'";
            ResultSet obj3=obj2.executeQuery(q);
            
            Statement obj4=obj1.createStatement();
            String q2="SELECT * FROM empreg";
            ResultSet obj5=obj4.executeQuery(q2);
            
            Statement obj6=obj1.createStatement();
            String q3="SELECT * FROM empreg";
            ResultSet obj7=obj6.executeQuery(q3);
        ?>
        <h1 align="center">Report a bug:</h1>
        <form name=f1 onsubmit="return valid()" action="reportbugINS.jsp" method="post">
            <table class="table2">
                <tr>
                    <td>Project : </td>
                    <td>
                        <select name=project>
                            <option value="sel">sel</option>
                            <%while(obj3.next())
                            {
                            %>
                            <option value="<%=obj3.getString("pid")%>"><%=obj3.getString("proname")%></option>
                            <%
                            }
                            %>
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
                            <%while(obj5.next())
                            {
                            %>
                            <option value="<%=obj5.getString("eid")%>"><%=obj5.getString("name")%></option>
                            <%
                            }
                            %>
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
                    <td><input type="hidden" value="<%=session.getAttribute("user")%>" name=hid><input type="submit" value="Report"></td>
                </tr>
                <tr>
                    <td><a href="emphome.jsp">Back</a></td>
                </tr>
            </table>
        </form>
    </body>
</html>
