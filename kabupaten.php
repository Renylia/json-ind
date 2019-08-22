<?php 
$conn = mysqli_connect('localhost', 'root', '', 'db_ind');
$getdata = $_GET['id'];
$query = mysqli_query($conn, "SELECT * FROM regencies WHERE province_id='$getdata'");
?>

<!DOCTYPE html>
<html>
<head>
	<title>Kabupaten</title>
</head>
<body>
<h2 style="text-align: center;">Data Kabupaten</h2>
<?php
while($row = mysqli_fetch_assoc($query)) {?>
	<a href="kecamatan.php?id=<?php echo $row['id']?>"><?php echo json_encode($row)?></a><br>
	<?php
}
?>
</body>
</html>
