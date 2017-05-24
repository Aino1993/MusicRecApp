 <head>
<title>MusicRecApp</title>
 <link rel="stylesheet" href="css/bootstrap.css">
 <link rel="stylesheet" href="css/style.css">
  <script src="js/bootstrap.min.js"></script>
 </head><center><h1><?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "music_app";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * FROM songs ORDER BY rand() LIMIT 1";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo  $row["name"]. "<br>";
  
?>
</h1>
 <iframe width="300" height="225" src="<?php echo  $row["ytlink"] ?>">
</iframe> 
<?php
    }
} else {
	echo "0 results";
}
mysqli_close($conn);?>
<br><a href="index.html"><img src="images/back.png"></a><a href="anysong.php"><img src="images/refresh.png"></a>
</center>