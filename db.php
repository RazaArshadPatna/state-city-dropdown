
<?php
$servername = "localhost";
$username = "root";
$password = "";

// try {
//   $con = new PDO("mysql:host=$servername;dbname=statecitydropdown", $username, $password);
//   // set the PDO error mode to exception
//   $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//   echo "Connected successfully";
// } catch(PDOException $e) {
//   echo "Connection failed: " . $e->getMessage();
// }

$dbname='statecitydropdown';

$con=new Mysqli($servername,$username,$password,$dbname);

if($con->connect_error){
  echo "Connection Failed.";
}
else{
  echo "Successfully Connected.";
}


?>