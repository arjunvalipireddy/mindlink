

<!DOCTYPE html>
<html>
<head>
    <title> </title>
</head>
<body>

<?php 
$servername = "localhost";
$database = "u667124576_kuldb";
$username = "u667124576_kuldb";
$password = "maams2019";

// Create connection

$conn = mysqli_connect($servername, $username, $password, $database);
    $sql = " SELECT * FROM registration;";
    $result = mysqli_query($conn, $sql);
    $resultsCheck = mysqli_num_rows($result);
    
    if ($resultsCheck>0){
        while($row = mysqli_fetch_assoc($result))
        {
            echo $row['name']  ."<br>";
        }
    }
?>

</body>
</html>