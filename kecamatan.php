<?php 
$conn = mysqli_connect('localhost', 'root', '', 'db_ind');
$getdata = $_GET['id'];
$query = mysqli_query($conn, "SELECT * FROM districts WHERE regency_id='$getdata'");
?>

<!DOCTYPE html>
<html>
<head>
	<title>Kecamatan</title>
</head>
<body>
<h2 style="text-align: center;">Data Kecamatan</h2>
<?php
while($row = mysqli_fetch_assoc($query)) {?>
	<a href="desa.php?id=<?php echo $row['id']?>"><?php echo json_encode($row)?></a><br>
	<?php
}
?>
</body>
</html>
