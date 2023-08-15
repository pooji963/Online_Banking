<?php

	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "my_bank";
	$conn = mysqli_connect($servername, $username, $password, $dbname);

	$sql1 = "CREATE TABLE `Transaction` (
		`sno` int(3) NOT NULL AUTO_INCREMENT PRIMARY KEY,
		`sender` text NOT NULL,
		`receiver` text NOT NULL,
		`balance` int(8) NOT NULL,
		`datetime` datetime NOT NULL DEFAULT current_timestamp()
	  )";
	  $sql4="ALTER TABLE `transaction`
	  ADD PRIMARY KEY (`sno`)";

	  $sql5="ALTER TABLE `transaction`
	  MODIFY `sno` int(3) NOT NULL AUTO_INCREMENT" ;

$sql2="CREATE TABLE `users` (
    `id` int(3) NOT NULL,
    `name` text NOT NULL,
    `email` varchar(30) NOT NULL,
    `balance` int(8) NOT NULL,
    `datetime` datetime NOT NULL DEFAULT current_timestamp()
  )";

  $sql3="INSERT INTO `users` (`id`, `name`, `email`, `balance`) VALUES
  (1, 'Rashmitha', 'abc@gmail.com', 50000),
  (2, 'Akarsha', 'akarsha@gmail.com', 30000),
  (3, 'Siva', 'siva@gmail.com', 40000),
  (4, 'Shreya', 'shreya@gmail.com', 50000),
  (5, 'Deepika', 'deepika@gmail.com', 40000),
  (6, 'Roja', 'roja@gmail.com', 30000),
  (7, 'Eswararao', 'eswar@gmail.com', 50000),
  (8, 'Ranga', 'ranga@gmail.com', 40000),
  (9, 'Bhoomi', 'Bhoomi@gmail.com', 30000),
  (10, 'Bindu', 'Bindu@gmail.com', 50000)";

$sql7="ALTER TABLE `users`
ADD PRIMARY KEY (`id`)";

$sql8="ALTER TABLE `users`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT";



?>