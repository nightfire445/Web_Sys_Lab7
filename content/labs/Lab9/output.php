<?php

	
	try {

		$servername = $config['DB_HOST'];
	   	$username = $config['DB_USERNAME'];
		$password = $config['DB_PASSWORD'];

	   	$conn = new PDO("mysql:host=$servername;dbname=moris-websyslab9", $username, $password);
		
		if( isset($_GET['choice_3']) ){	    

			$sql = "SELECT `first name`, `last name` FROM students ORDER BY `last name`;"; 
		    foreach ($conn->query($sql) as $row) {
		        echo $row['first name'] . "\t";
		        echo $row['last name'] . "\t";
		    }

		    $sql = "SELECT `first name`, `last name` FROM students ORDER BY `first name`;"; 
		    foreach ($conn->query($sql) as $row) {
		        echo $row['first name'] . "\t";
		        echo $row['last name'] . "\t";
		    }
		}

		if(isset($_GET['choice_4']) ){
		
		$above_90 = "SELECT * FROM students INNER JOIN grades HAVING AVG( grade ) >= 90 IN ( SELECT grade FROM grades INNER JOIN students WHERE students.rin = grades.rin);"; 
		    echo "90-100: ". $conn->query($above_90) . " \t";
		   
		$between_80_89 = "SELECT * FROM students INNER JOIN grades HAVING AVG( grade ) >= 80 AND AVG( grade ) <= 89  IN ( SELECT grade FROM grades INNER JOIN students WHERE students.rin = grades.rin);"; 
		    echo "80-89: ". $conn->query($between_80_89) ."\t";
		    

		$between_70_79 = "SELECT * FROM students INNER JOIN grades HAVING AVG( grade ) >= 70 AND AVG( grade ) <= 79  IN ( SELECT grade FROM grades INNER JOIN students WHERE students.rin = grades.rin);";
		    echo "70-79: ". $conn->query($between_70_79) ."\t";


		$between_65_69 = "SELECT * FROM students INNER JOIN grades HAVING AVG( grade ) >= 65 AND AVG( grade ) <= 69 IN ( SELECT grade FROM grades INNER JOIN students WHERE students.rin = grades.rin);";
		    echo  "65-69: ". $conn->query($between_65_69) ."\t";

		$between_65 = "SELECT * FROM students INNER JOIN grades HAVING AVG( grade ) < 65 IN ( SELECT grade FROM grades INNER JOIN students WHERE students.rin = grades.rin);";
		    echo  "<65: ". $conn->query($between_65_69) ."\t";


		}	
	} catch(PDOException $e) {
      echo 'ERROR: ' . $e->getMessage();
   }


?>





































?>