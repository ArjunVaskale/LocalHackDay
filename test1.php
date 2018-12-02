
 <?php
        
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "chat";


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

          $username = $_POST['username'];
          $password = $_POST['password'];
          $email = $_POST['email'];

          echo "data is".$username."<br>".$password."<br>".$email."<br>";


$sql = "INSERT INTO chat_table (username, password,email)
VALUES ('".$username."','".$password."','".$email."');";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
