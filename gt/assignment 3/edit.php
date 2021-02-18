<?php
include('conf.php');
?>

<?php
$id=$_GET['id'];
$sql = "SELECT * FROM `users` WHERE `id`=$id";
$result = mysqli_query($conn, $sql);
$row = $result->fetch_assoc();
$name = $row['name'];
$email = $row['email'];
$gender = $row['gender'];
$city = $row['city'];
?>
<?php
if(isset($_POST['update'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];
    $city = $_POST['city'];

    $sql = "UPDATE `users` SET name='$name', email='$email', gender='$gender', city='$city' WHERE id='$id'";
    if(mysqli_query($conn, $sql)){
        echo "updated successfully";
        header("Location:details.php");
    }
    else{
        echo "failed";
    }
}
?>
<html>
    <head>
        <title>HTML Forms</title>
    </head>
<body>
<form method="POST" action="edit.php">
NAME    :<input type="text" name="name" value=<?php echo "$name" ?> required><br>
EMAIL   :<input type="email" name="email" value=<?php echo "$email" ?> required ><br>
GENDER  :<input type="text" name="gender" value=<?php echo "$gender" ?> required><br>
CITY    :
            <select name="city">
        <option value="ddn" <?php if($city=="Ddn"){echo "selected";}?>>ddn</option>
        <option value="sre" <?php if($city=="sre"){echo "selected";}?>>sre</option>
        <option value="ggn" <?php if($city=="ggn"){echo "selected";}?>>ggn</option>
        <option value="ndl" <?php if($city=="ndl"){echo "selected";}?>>ndl</option>
        <option value="jaipur" <?php if($city=="jaipur"){echo "selected";}?>>jaipur</option>
        <option value="kota" <?php if($city=="kota"){echo "selected";}?>>kota</option>
        <option value="mumbai" <?php if($city=="mumbai"){echo "selected";}?>>mumbai</option>
        <option value="meerut" <?php if($city=="meerut"){echo "selected";}?>>meerut</option>
        </select> <br>
<input type="submit" name="update" value="update">
</form>
</body>
</html>