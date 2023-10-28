<?php
$host = 'localhost';
$username = 'root';
$password = '';
$database = 'mydatabase';

// PDO
$pdo = new PDO( "mysql:host={$host}; dbname={$database}", $username, $password, [ PDO::ATTR_EMULATE_PREPARES => false ] );
// OOP mysqli
$mysqli = new mysqli( $host, $username, $password, $database );
// Procedural mysqli
$mysqli_p = mysqli_connect( $host, $username, $password, $database );
?>
<?php
$servername = "localhost";
$username = "root";
$password = " ";
$database = "artist_shop";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
