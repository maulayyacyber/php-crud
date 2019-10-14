<?php

//membuat deklarasi variable
$db_host = "localhost";
$db_user = "root";
$db_pass = "maulayyacyber17";
$db_name = "db_crud";
//create variable connectin
$connection = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
//checking connection
if(!$connection) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
