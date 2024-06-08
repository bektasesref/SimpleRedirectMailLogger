<?php
$servername = "localhost";
$username = "studiobi_tracker";
$password = "77qc{corrupted}zk";
$dbname = "studiobi_mailTracker";

$connection = new mysqli($servername, $username, $password, $dbname);
  

$query = mysqli_query($connection, "SELECT * FROM visitors");



?>
<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Yönlendirme Mailleri</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900|RobotoDraft:400,100,300,500,700,900'>
<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'><link rel="stylesheet" href="./style.css">

</head>
<body>
<div class="pen-title">
  <h1>Yönlendirme Mailleri</h1>
</div>

<div class="container">
  <div class="card"></div>
  <div class="card">
    <h1 class="title">Mailler</h1>
	<?php 
	while($row = $query->fetch_assoc()) 
	{
		echo "<br><p>   " .json_encode($row, JSON_PRETTY_PRINT)."</p><br>";
	}
	?>
  </div>
</div>
</body>
</html>
<?php 
$connection->close();
exit();
?>
