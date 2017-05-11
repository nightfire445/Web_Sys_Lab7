<?php
  // Creates sansSight Database and creates the user and history table if it doesn't already exist.
	require 'config.php';
  	
  try{
    $servername = $config['DB_HOST'];
   	$username = $config['DB_USERNAME'];
  	$password = $config['DB_PASSWORD'];
  	$dbname = $config['DB_NAME'];

    $dbh = new PDO("mysql:host=$servername;", $username, $password);
  	$sql = "CREATE DATABASE IF NOT EXISTS `ITWS2110-F16-Moris-Quiz2`;";
  	$dbh->exec($sql);

  	$dbconn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);



    $create_users = "CREATE TABLE IF NOT EXISTS `user` (
                  uid int(99) PRIMARY KEY AUTO_INCREMENT,
                  username varchar(10),
                  firstname varchar(30),
                  lastname varchar(30),
                  nickname varchar(30),
                  salt varchar(100) NOT NULL,
                  password varchar(100) NOT NULL
                ) COLLATE utf8_unicode_ci;";


    $create_courses = "CREATE TABLE IF NOT EXISTS `courses` (
                  courseID varchar(10),
                  courseName varchar(30),
                  cid int(99) PRIMARY KEY AUTO_INCREMENT
                  ) COLLATE utf8_unicode_ci;";

    $create_attendance = "CREATE TABLE IF NOT EXISTS `attendance` (
                  username varchar(10),
                  `date` date NOT NULL,
                  `time` TIME NOT NULL,
                  aid int(99) PRIMARY KEY AUTO_INCREMENT,
                  courseID varchar(10)               
                ) COLLATE utf8_unicode_ci;";
   
  $result_1 = $dbconn->query($create_users);
	$result_2 = $dbconn->query($create_courses);
  $result_3 = $dbconn->query($create_attendance);


  $courses_insert = $dbconn->prepare(  'INSERT INTO `courses` (`courseID`,`courseName`) VALUES (:courseID, :courseName)');
  $courses_insert->execute( array(':courseID' => 'ITWS2110', ':courseName' => 'Web Systems Development' ) );
  $courses_insert->execute( array(':courseID' => 'ITWS4500', ':courseName' => 'Web Systems Development II' ) );


  }
  
  catch (Exception $e){
    echo "Error: " . $e->getMessage();
  }

 ?>