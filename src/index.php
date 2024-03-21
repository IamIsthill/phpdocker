<?php
$servername = "db"; // Change this if your MySQL server is running on a different host
$username = "root"; // Change this if your MySQL username is different
$password = "notSecureChangeMe"; // Change this to your MySQL root password
$dbname = "grocerydb"; // Change this to the name of your database

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // Set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    $sql = "INSERT INTO employee(firstName) values('Ronnie Boone');";
    $stmt = $conn->prepare($sql);
    $exec = $stmt->execute();

    if($exec){
      echo "Inserted";
    }

} catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage(); // If connection fails, this message will be displayed along with the error message
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <button><a href="./test.php">Go</a></button>
  
</body>
</html>


