<?php
// Database connection settings
$host = "localhost";     // Change to your host if different
$username = "root";      // Change to your username
$password = "";          // Change to your password
$database = "dsa_database";   

// Create a database connection
$connection = new mysqli($host, $username, $password, $database);

// Check the connection
if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}

// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $phone = $_POST["phone"];
    $email = $_POST["email"];
    $gender = $_POST["gender"];
    
    // Insert data into the database
    $query = "INSERT INTO your_table_name (name, phone, email, gender) VALUES ('$name', '$phone', '$email', '$gender')";
    
    if ($connection->query($query) === TRUE) {
        echo "Data inserted successfully.";
    } else {
        echo "Error: " . $query . "<br>" . $connection->error;
    }
} else {
    echo "No data submitted.";
}

// Close the database connection
$connection->close();
?>
