 <?php
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
    
  
  $name = $_POST['name'];
  $message = $_POST['message'];
  $time=time();

  $sql = "INSERT INTO chat_table (name, message, time)
       VALUES ('arjun', 'hello !', '455614')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

  ?>