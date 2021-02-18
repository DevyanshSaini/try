<?php 
include('conf.php');
?>
<?php
    if(isset($_POST['submit']))
    {
    $name=$_POST['name'];
    $email=$_POST['email'];
    $gender=$_POST['gender'];
    $city=$_POST['city'];
    $sql="INSERT INTO users (name,email,gender,city) VALUES ('$name','$email', '$gender','$city')";
    mysqli_query($conn, $sql);
    }
    else
    {
        echo "please press submit to submit the data";
    }
?>
<html>
<head>
    <title>form</title>
</head>
<body>

<form method="POST" action="ques3.php">
NAME    :<input type="text" name="name" required><br>
EMAIL   :<input type="email" name="email"required ><br>
GENDER  :   male<input type="radio" name="gender" value="male" required>
         female<input type="radio" name="gender" value="female" required><br>
CITY    :
            <select name="city">
        <option value="ddn">ddn</option>
        <option value="sre">sre</option>
        <option value="ggn">ggn</option>
        <option value="ndl">ndl</option>
        <option value="jaipur">jaipur</option>
        <option value="kota">kota</option>
        <option value="mumbai">mumbai</option>
        <option value="meerut">meerut</option>
        </select> <br>
<input type="submit" name="submit">
</form>
</body>
</html>
