<?php 
$conn = mysqli_connect('localhost', 'root', '', 'db_ind');
$getdata = $_GET['id'];
$query = mysqli_query($conn, "SELECT * FROM villages WHERE district_id='$getdata'");
?>

<!DOCTYPE html>
<html>
<head>
	<title>Desa</title>
</head>
<body>
<h2 style="text-align: center;">Data Desa</h2>
<?php
while($row = mysqli_fetch_assoc($query)) {?>
	<a href=""><?php echo json_encode($row)?></a><br>
	<?php
}
?>
</body>
</html>
