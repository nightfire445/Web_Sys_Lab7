<?php 

	require 'config.php';
   	try {
   		$servername = $config['DB_HOST'];
   		$username = $config['DB_USERNAME'];
		$password = $config['DB_PASSWORD'];

   		$conn = new PDO("mysql:host=$servername;", $username, $password);
	    // set the PDO error mode to exception
	    $sql = "CREATE DATABASE IF NOT EXISTS `moris-websyslab9`;";
	    // use exec() because no results are returned
	    $conn->exec($sql);
	    $conn = new PDO("mysql:host=$servername;dbname=moris-websyslab9", $username, $password);

	    $create_courses = "CREATE TABLE IF NOT EXISTS courses (
	    crn INT(11) PRIMARY KEY, 
	    prefix VARCHAR(4) NOT NULL,
	    number SMALLINT(4) NOT NULL,
	    title VARCHAR(255) NOT NULL,
	    section INT(8),
	    year INT(5)
	    ) COLLATE utf8_unicode_ci;";

	    $create_students = "CREATE TABLE IF NOT EXISTS students (
	    rin INT(9) PRIMARY KEY, 
	    rcsID CHAR(7),
	    `first name` VARCHAR(100) NOT NULL,
	    `last name` VARCHAR(100) NOT NULL,
	    alias VARCHAR(100) NOT NULL,
	    phone INT(10),
	    street VARCHAR(100) NOT NULL,
	    city VARCHAR(100) NOT NULL,
	    st VARCHAR(100) NOT NULL,
	    zip VARCHAR(100) NOT NULL
	    ) COLLATE utf8_unicode_ci;";

	    $create_grades = "CREATE TABLE IF NOT EXISTS grades (
	    crn INT(11),
    	rin INT(9),
	    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
	    FOREIGN KEY(crn) REFERENCES courses(crn),
	    FOREIGN KEY(rin) REFERENCES students(rin),
	    grade INT(3)
	    ) COLLATE utf8_unicode_ci;";

		$result_1 = $conn->query($create_courses);
		$result_2 = $conn->query($create_students);
	    $result_3 =$conn->query($create_grades);
	    
//      open connection here
   } catch(PDOException $e) {
      echo 'ERROR: ' . $e->getMessage();
   }

  
 ?>