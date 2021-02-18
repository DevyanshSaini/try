<html>
<head></head>
<body>
    <form method="POST" action="ques2.php">
        var1:<input type="number" name="var1" value=0>
        var2:<input type="number" name="var2" value=0><br><br>
        <input type="submit" name="submit">
    </form>
</body>
</html>
<?php 
    if(isset($_POST['submit']))
    {
        $sum=$_POST['var1']+$_POST['var2'];
        echo "sum:";
        echo $sum;
    }
    else
    {
        echo "press submit button for sum";
    }
?>
