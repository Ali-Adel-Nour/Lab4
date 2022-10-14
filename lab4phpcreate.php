<?php
#3
//create db TABLE
   $dbhost = 'localhost';
   $dbuser = 'root';
   $dbpass = '';
   $dbname ='lab4php';
   $conn = mysqli_connect($dbhost, $dbuser, $dbpass);
   
   if(! $conn ) {
      die('Could not connect: ' . mysqli_error($conn));
   }
   
   echo 'Connected successfully<br>';
   //create
   $sql = "create database $dbname";
     $retval = mysqli_query( $conn,$sql );
   
   if(! $retval ) {
      die('Could not create database: ' . mysqli_error($conn));
   }

    //select
    mysqli_select_db( $conn,$dbname );
   echo "Database <span style='color:red'>$dbname </span>created & selected successfully\n";
  

  //create table
   $sqlcreate = 'CREATE TABLE `USER` (
    `#` INT(50) NOT NULL AUTO_INCREMENT,
    `Name` VARCHAR(45) NOT NULL,
    `Email` VARCHAR(50) NULL,
    `Gender` VARCHAR(20),
    `mail status` VARCHAR(20) NULL,
    PRIMARY KEY (`#`))';

   $retval = mysqli_query( $conn,$sqlcreate );
   
   if(! $retval ) {
      die('Could not create table: ' . mysqli_error($conn));
   }
    
   echo "<br>Database Table  created successfully\n";

  //insert data in table
  $sqlinsert = "INSERT INTO `USER` (`#`, `Name`, `Email`, `Gender`, `mail status` )VALUES
    ('7', 'user1', 'supervisor@iti.com', 'F', 'yes'),
    ('8', 'user2', 'admin@iti.com', 'M', 'no'),
    ('9', 'user3', 'test@iti.com', 'F', 'yes'),
    ('10', 'noha', 'admin@admin.com', 'F', 'no'),
    ('11', 'omer', 'omer.kiwan@gmail.com', 'M', 'yes'),
    ('12', 'test', 'test@demo.com', 'M', 'no'),
    ('13', 'demo', 'demo@test.gov', 'F', 'yes')";

   $retval = mysqli_query( $conn,$sqlinsert );
   
if(! $retval ) {
   die('Could not create table: ' . mysqli_error($conn));
}
 
echo "<br>Database Table  created successfully\n";

mysqli_close($conn);

?>
