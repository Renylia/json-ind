<?php 
$conn = mysqli_connect('localhost', 'root', '', 'db_ind');
$query = mysqli_query($conn, 'SELECT * FROM provinces');
?>

<!DOCTYPE html>
<html>
<head>
	<title>Provinces</title>
</head>
<body>
<h2 style="text-align: center;">Data Provinces</h2>
<?php
while($row = mysqli_fetch_assoc($query)) {?>
	<a href="kabupaten.php?id=<?php echo $row['id']?>"><?php echo json_encode($row)?></a><br>
	<?php
}
?>
</body>
</html>
