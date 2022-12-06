<?php 
require("./db.php");

// client
$sql = "CREATE TABLE client (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(500) NOT NULL,
    mob VARCHAR(500) NOT NULL,
    address VARCHAR(500) NOT NULL,
    reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";
    
if ($conn->query($sql) === TRUE) {
    echo "Table Client created successfully<br>";
} else {
    echo "Error creating table: " . $conn->error;
}


// product
$sql = "CREATE TABLE product (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    code VARCHAR(20) NOT NULL,
    name VARCHAR(500) NOT NULL,
    rate INT(50) NOT NULL,
    stock INT(50) NOT NULL,
    reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";
    
if ($conn->query($sql) === TRUE) {
    echo "Table Product created successfully<br>";
} else {
    echo "Error creating table: " . $conn->error;
}


$conn->close();


?>