<?php

$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$dbname ='lab4php';

$conn = mysqli_connect($dbhost, $dbuser, $dbpass);

if(! $conn ) {
  die('Could not connect: ' . mysqli_error($conn));
}

echo 'Connected successfully<br>';

//select
mysqli_select_db( $conn,$dbname );
echo "Database <span style='color:red'>$dbname </span>created & selected successfully\n";


if(isset($_POST['submit'])){
  
  if(!empty($_POST['name']) || !empty( $_POST['email']) || !empty( $_POST['gender']) ||  !empty( $_POST['agree'])) {
      
      $Name = $_POST['name'];
      $Email = $_POST['email'];
      $gender = $_POST['gender'];
      $mailstatus = $_POST['agree'];

      $sqlinsert = "INSERT INTO USER(`Name`, `Email`, `Gender`, `mail status` )VALUES ('$Name', '$Email', '$gender', '$mailstatus')";

      $retval = mysqli_query( $conn,$sqlinsert );

      if(! $retval ) {
        die('Could not insert to table: ' . mysqli_error($conn));
      }
      else{
      echo "<br>Data inserted to table successfully\n";
      
      }
    }

else{
  echo "all fields requird";
}
}

?>
<html>
  <style>
     form {
            max-width: 500px;
            border:auto;
            margin: auto;
            padding: auto;
         }
  </style>
  <body>
    <?php
        if(isset($_POST['submit'])){
          echo "<form>"; 
          echo "<p>veiw record</p>";
          echo "<hr>";
          echo "Name <br>";
          echo $Name= $_POST['name'];
          echo "<br>";
          echo "Email ";
          echo "<br>";
          echo $Email= $_POST['email'];
          echo "<br>";
          echo "Gender";
          echo "<br>";
          echo $gender= $_POST['gender'];
          echo "<br>";
          echo "you will receive E-mail from us";
          echo "<br>";
          echo "<input type='bottom' value='back'>";
          echo"</form>";
        }
    ?>
    
  </body>
</html>