<?php
$servername = "localhost";
$username = "studiobi_tracker";
$password = "77qc{corrupted}zk";
$dbname = "studiobi_mailTracker";

$connection = new mysqli($servername, $username, $password, $dbname);

if(isset($_POST['mail']))
{    
    $mail = $_POST['mail'];
 
	$insert = "INSERT INTO visitors (mail) VALUES ('$mail')";
	$connection->query($insert);
	$connection->close();
	header("Location: https://enchanted-song-c6e.notion.site/-----link----");
	exit();
}
?>
<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Yönlendirme</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900|RobotoDraft:400,100,300,500,700,900'>
<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'><link rel="stylesheet" href="./style.css">

</head>
<body>
<div class="pen-title">
  <h1>Yönlendirme</h1>
</div>
<div class="container">
  <div class="card"></div>
  <div class="card">
    <h1 class="title">Yönlendirme</h1>
    <form  action="Redirect.php" method="post">
      <div class="input-container">
        <input type="email" id="mail" required="required" name="mail"/>
        <label for="#{label}">Mailiniz</label>
        <div class="bar"></div>
      </div>
      <div class="button-container">
        <button type="submit"><span>Siteye Git</span></button>
      </div>
    </form>
  </div>
</div>
</body>
</html>
