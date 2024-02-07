<?php
    $servername = "localhost";
    $database = "students";
    $username = "root";
    $password = "";

    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $database);

    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    echo "Connected successfully\n";
    


mysqli_close($conn);
?>
    
<!-- <?php
    $sql = "INSERT INTO students () VALUE ()";

    $resultado = mysqli_query($conn, $sql);
    while ($row = mysqli_fetch_assoc($resultado)) 
        {       
            echo $row['name'] . " -- " . $row['lastname'] . " -- " . $row['email'] . "\n"; 
        }
?>

<?php
    $sql = "SELECT * FROM students";

    $resultado = mysqli_query($conn, $sql);
    while ($row = mysqli_fetch_assoc($resultado)) 
        {       
            echo $row['name'] . " -- " . $row['lastname'] . " -- " . $row['email'] . "\n"; 
        }
?> -->