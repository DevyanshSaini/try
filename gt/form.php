<html>
    <head>
    <style>
        table, th, td{
        border:1px dotted;
        border-collapse: collapse;
        padding:15px;
        text-align:center;

        }

</style>
        <title>php first program</title>
    </head>
    <body>
        <form method="post" action="index.php">
            NAME    :<input type="text" name="name" required><br><br>
            EMAIL   :<input type="email" name="email"required ><br><br>
            CONTACT :<input type="tel" name="number" pattern="[0-9]{10}" required><br><br>
            CITY    :<input type="text" name="city" required><br><br>
            COURSE  :<input type="text" name="course" required><br><br>
            INTEREST:<input type="text" name="interest" required ><br><br>
            <input type="submit" name="submit">
        </form>
    </body>
</html>

<?php
    if(isset($_POST['submit']))
    {   /*if(!empty($_POST['name'])&&!empty($_POST['email'])&&!empty($_POST['number'])
        &&!empty($_POST['city'])&&!empty($_POST['course'])&&!empty($_POST['interest']))
        {*/
        $name=$_POST['name'];
        $email=$_POST['email'];
        $number=$_POST['number'];
        $city=$_POST['city'];
        $course=$_POST['course'];
        $interest=$_POST['interest'];
        echo "<table>
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>CONTACT</th>
            <th>CITY</th>
            <th>COURSE</th>
            <th>INTEREST</th>
        </tr>
        <tr>
            <td>$name</td>
            <td>$email</td>
            <td>$number</td>
            <td>$city</td>
            <td>$course</td>
            <td>$interest</td>
        </tr>
        </table>";
        //}
    
        
    }
    else
    {
        echo " ";
    }
?>


