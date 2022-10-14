<html>

<head>
  <style>
  form {
    max-width: 500px;
    margin: auto;
  }

  table {

    font-family: Arial, Helvetica, sans-serif;
    border-collapse: collapse;
  }

  th,
  td {
    border: 1px solid red;
    padding: 8px;
  }

  tr:nth-child(even) {
    background-color: #f2f2f2;
  }

  tr:hover {
    background-color: #ddd;
  }

  th {
    padding-top: 15px;
    padding-bottom: 15px;
    text-align: left;

  }

  input {
    background-color: #04AA6D;
    color: white;
  }

  a {
    margin: right;
  }
  </style>
</head>

<body>


</body>

</html>

<?php
#3
//create db TABLE
   $dbhost = 'localhost';
   $dbuser = 'root';
   $dbpass = '';
   $dbname ='lab4';
   $conn = mysqli_connect($dbhost, $dbuser, $dbpass);

   if(! $conn ) {
      die('Could not connect: ' . mysqli_error($conn));
   }
   echo 'Connected successfully<br>';
   //select
   mysqli_select_db( $conn,$dbname );

$sql = 'SELECT `#`, `Name`, `Email`, `Gender`, `mail status` FROM USER';
$result = mysqli_query($conn,$sql );

if(! $result ) {
   die('Could not get data: ' . mysqli_error($conn));
}

if (mysqli_num_rows($result) > 0) {
   echo "<form>";
   echo "Users Details";
   echo "<a href = 'formregest.php'> Add New User </a>";
   echo "<hr>";
   echo "<table><tr><th>#</th><th>Name</th><th>Email</th><th>Gender</th><th>Mail status</th></tr>";

   // output data of each row
   while($row = mysqli_fetch_assoc($result)) {
      echo "<tr><td>" . $row['#']. "</td><td>" . $row['Name']. "</td> <td>" . $row['Email']. " </td><td> " . $row['Gender']. " </td>
               <td> " . $row['mail status']. " </td></tr>";
   }
   echo "</table>";
   echo "</form>";
 }

 else {
   echo "0 results";
 }

echo "Fetched data successfully\n";
   mysqli_close($conn);


?>