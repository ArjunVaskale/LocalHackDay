 <?php
    
       $username = $_POST['username'];
          $password = $_POST['password'];

          echo "data is".$username."<br>".$password;



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

$sql = "INSERT INTO chat_table (username, password,email)
VALUES ('deepak', '1234','deepal@gmail.com')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
