<?php

$con=mysqli_connect("localhost","root","","post");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

// Create table
$q1 = "CREATE TABLE following (
follow_id INT(10) UNSIGNED AUTO_INCREMENT,
follower varchar(100) NOT NULL,
following varchar(100) NOT NULL,
UNIQUE (follower),
UNIQUE (following),
PRIMARY KEY (follow_id)
)DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci";
// Execute query
if (mysqli_query($con,$q1))
  {
  echo "Table posts created successfully";
  }
else
  {
  echo "Error creating table: " . mysqli_error($con);
  }





?>