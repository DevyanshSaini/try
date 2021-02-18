<?php
include('conf.php');
?>

<?php
    $sql = "SELECT * FROM `users`";
    $result = mysqli_query($conn, $sql);

    if($result->num_rows > 0){
    ?>

    <table border="1px">
		<thead>
			<tr>
				<th>Name</th>
				<th>E-Mail</th>
                <th>gender</th>
				<th>City</th>

			</tr>
		</thead>
		<tbody>
			
            <?php
			while($row = $result->fetch_assoc()){?>
			<tr>
				<td><?php echo $row['name']?></td>
				<td><?php echo $row['email']?></td>
                <td><?php echo $row['gender']?></td>
				<td><?php echo $row['city']?></td>
			
            </tr>
           <?php } ?>
		</tbody>
	</table>
<?php    }
?>
