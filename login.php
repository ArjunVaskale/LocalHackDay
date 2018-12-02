
 <?php
          $username = $_POST['username'];
          $password = $_POST['password'];

         $dbhost = 'localhost';
         $dbuser = 'root';
         $dbpass = '';
         $dbname = 'chat';
         $conn = mysqli_connect($dbhost, $dbuser, $dbpass , $dbname);
   
         if(! $conn ){
            die('Could not connect: ' . mysqli_error());
         }
         echo 'Connected successfully';
         mysqli_close($conn);

  $sql = "INSERT INTO chat_table (username,password)
       VALUES ('arjun', '12345678');";

if($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

  ?>