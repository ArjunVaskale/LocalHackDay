 <?php
         
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "chat";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
     $username = $_POST['username'];
      $password = $_POST['password'];

  $cmd="select password from chat_table ; ";
     
     $result = $conn->query($cmd) ;
    if ($result->num_rows > 0){ $check=false;
       while($row = $result->fetch_assoc()) {
        $pass=$row["password"] ;
          if($pass==$password){
           $check=true;
      
          }
    }
if($check==true)
echo "Successfully logged in";
else
echo "Invalid username and password";
}

$conn->close();
?>
