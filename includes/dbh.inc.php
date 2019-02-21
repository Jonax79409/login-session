<!--Created by Gaurav

Before we can access data in the MySQL database, we need to be able to connect to the server and thats why this file is created

-->

<?php

$servername="localhost";
$dBUsername="root";
$dBPassword="";
$dBName="login_system";

$conn = mysqli_connect($servername,$dBUsername,$dBPassword,$dBName);

if(!$conn){
  die("Connection failed : ".mysqli_connect_error());
}//to check if the connection got failed
