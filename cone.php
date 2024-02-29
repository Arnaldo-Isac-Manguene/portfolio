<?php
$servername = "mysql-734-project734.a.aivencloud.com";
$port = "28013";
$database = "teste";
$username = "avnadmin";
$password = "AVNS_Nbw5j6QGUnlbybt8kY3";

try {
    $conn = new PDO("mysql:host=$servername;port=$port;dbname=$database", $username, $password);
    // Set PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully";
} catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}

$sql = "INSERT INTO teste (id, nome, apelido, email) VALUES (null, 'nome apelido', 'apelidoapelido', 'aaa@email')";
$stmt = $conn->prepare($sql);

$stmt->execute();

echo "Data inserted successfully.";
?>
