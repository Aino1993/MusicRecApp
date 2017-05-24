 <head>
<title>MusicRecApp</title>
 <link rel="stylesheet" href="css/bootstrap.css">
 <link rel="stylesheet" href="css/style.css">
  <script src="js/bootstrap.min.js"></script>
 </head><center><h1><?php
$servername = "127.0.0.1:49356";
$username = "azure";
$password = "6#vWHD_$";
$dbname = "localdb";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * FROM songs WHERE type='happy' ORDER BY rand() LIMIT 1";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo  $row["name"]. "<br>";
  
?>
</h1>
 <iframe width="560" height="340" src="<?php echo  $row["ytlink"] ?>">
</iframe> 
<?php
    }
} else {
	echo "0 results";
}
mysqli_close($conn);?>
<br><a href="index.html"><img src="images/back.png"></a><a href="happy.php"><img src="images/refresh.png"></a>
</center>