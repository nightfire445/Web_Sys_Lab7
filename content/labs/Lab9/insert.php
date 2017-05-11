<?php



   try {
   		$servername = $config['DB_HOST'];
	   	$username = $config['DB_USERNAME'];
		$password = $config['DB_PASSWORD'];
	   	$conn = new PDO("mysql:host=$servername;dbname=moris-websyslab9", $username, $password);
		
		// begin the transaction
		$conn->beginTransaction();


		$conn->exec("INSERT INTO `courses` (`crn`,`number`,`prefix`,`section`,`title`,`year`) VALUES (12145,1100,'CSCI',4,'Computer Science 1',2011)");
		$conn->exec("INSERT INTO `courses` (`crn`,`number`,`prefix`,`section`,`title`,`year`) VALUES (12146,1100,'PSYC',2,'General Psychology',2015)");
		$conn->exec("INSERT INTO `courses` (`crn`,`number`,`prefix`,`section`,`title`,`year`) VALUES (22468,4150,'MATH',1,'Graph Theory',2016)");
		$conn->exec("INSERT INTO `courses` (`crn`,`number`,`prefix`,`section`,`title`,`year`) VALUES (11223,2220,'PHYS',6,'Quantum Physics II',2015)");
		$conn->exec("INSERT INTO `courses` (`crn`,`number`,`prefix`,`section`,`title`,`year`) VALUES (13124,1010,'BIO',10,'Introduction to Biology',2012)");
		$conn->exec("INSERT INTO `courses` (`crn`,`number`,`prefix`,`section`,`title`,`year`) VALUES (21935,2963,'CSCI',3,'Introduction to Open Source',2016)");
		$conn->exec("INSERT INTO `courses` (`crn`,`number`,`prefix`,`section`,`title`,`year`) VALUES (20037,2100,'ITWS',1,'Web Systems Development',2015)");
		$conn->exec("INSERT INTO `courses` (`crn`,`number`,`prefix`,`section`,`title`,`year`) VALUES (19450,1200,'MATH',8,'Calculus II',2014)");
		$conn->exec("INSERT INTO `courses` (`crn`,`number`,`prefix`,`section`,`title`,`year`) VALUES (34334,4100,'CHEM',2,'Instrumental Methods of Analysis',2015)");
		$conn->exec("INSERT INTO `courses` (`crn`,`number`,`prefix`,`section`,`title`,`year`) VALUES (12400,1200,'IHSS',3,'IT and Society',2013)");


		$conn->exec("INSERT INTO `students` (`alias`,`city`,`first name`,`last name`,`phone`,`rcsID`,`rin`,`st`,`street`,`zip`) VALUES ('Jeremy','Montvale','Jeremy','Simon',5515790491,'simonj10',661482693,'NJ','Myrtle Street',07645)");
		$conn->exec("INSERT INTO `students` (`alias`,`city`,`first name`,`last name`,`phone`,`rcsID`,`rin`,`st`,`street`,`zip`) VALUES ('Austin','Latham','Austin','Smith',6017775637,'smitha25',661479752,'UT','Pauls Ave',42185)");
		$conn->exec("INSERT INTO `students` (`alias`,`city`,`first name`,`last name`,`phone`,`rcsID`,`rin`,`st`,`street`,`zip`) VALUES ('Dave','Columbus','David','Depoy',3094129945,'depoyd1',661472335,'OH','5th Street',22139)");
		$conn->exec("INSERT INTO `students` (`alias`,`city`,`first name`,`last name`,`phone`,`rcsID`,`rin`,`st`,`street`,`zip`) VALUES ('Soli','Troy','Solomon','Mori',2004552312,'moriso2',661471239,'NY','Pawling Ave',12180)");
		$conn->exec("INSERT INTO `students` (`alias`,`city`,`first name`,`last name`,`phone`,`rcsID`,`rin`,`st`,`street`,`zip`) VALUES ('Sassy','Boston','Stephan','Steenstrup',1152014636,'steens4',661481012,'MA','Hayward Street',06452)");
		$conn->exec("INSERT INTO `students` (`alias`,`city`,`first name`,`last name`,`phone`,`rcsID`,`rin`,`st`,`street`,`zip`) VALUES ('Ben','Metuchen','Ben','Gruber',2215369304,'gruberb6',661479945,'NJ','Lally Court',06221)");
		$conn->exec("INSERT INTO `students` (`alias`,`city`,`first name`,`last name`,`phone`,`rcsID`,`rin`,`st`,`street`,`zip`) VALUES ('Sean','Chatham','Sean','Maltby',5219385593,'maltbys12',661481112,'NJ','Lakeside Ave',05463)");
		$conn->exec("INSERT INTO `students` (`alias`,`city`,`first name`,`last name`,`phone`,`rcsID`,`rin`,`st`,`street`,`zip`) VALUES ('Tony','Basking Ridge','Tony','Zheng',1183943845,'zhengt6',661490452,'NJ','Main Street',07453)");
		$conn->exec("INSERT INTO `students` (`alias`,`city`,`first name`,`last name`,`phone`,`rcsID`,`rin`,`st`,`street`,`zip`) VALUES ('Brian','Harvard','Brian','Maeder',4017848872,'maederb3',661481635,'CT','Troy Street',046233)");
		$conn->exec("INSERT INTO `students` (`alias`,`city`,`first name`,`last name`,`phone`,`rcsID`,`rin`,`st`,`street`,`zip`) VALUES ('Tom','Philadelphia','Tom','Wagner',9028787744,'wagnert10',661479645,'PA','18 Ave',06453)");
		$conn->exec("INSERT INTO `students` (`alias`,`city`,`first name`,`last name`,`phone`,`rcsID`,`rin`,`st`,`street`,`zip`) VALUES ('Islander','Troy','Hickey','Tessa', 8453453293,'hicket', 509483728,'NY','Favor's Court, 12180)");
		$conn->exec("INSERT INTO `students` (`alias`,`city`,`first name`,`last name`,`phone`,`rcsID`,`rin`,`st`,`street`,`zip`) VALUES ('STM','Latham','Socks','Maeder', 69694202111,'maedes',509482290,'NY','224 Pawling Ave',12180)");
		$conn->exec("INSERT INTO `students` (`alias`,`city`,`first name`,`last name`,`phone`,`rcsID`,`rin`,`st`,`street`,`zip`) VALUES ('Slayer','gainsburg','Maltby','Sean',9443922341,'maltbs',509403790,'OH','5th Street',22139)");
		$conn->exec("INSERT INTO `students` (`alias`,`city`,`first name`,`last name`,`phone`,`rcsID`,`rin`,`st`,`street`,`zip`) VALUES ('Soli','Troy','Solomon','Mori',2004552312,'moriso2',509675844,'NY','Pawling Ave',12180)");
		$conn->exec("INSERT INTO `students` (`alias`,`city`,`first name`,`last name`,`phone`,`rcsID`,`rin`,`st`,`street`,`zip`) VALUES ('Sassy','Boston','Stephan','Steenstrup',1152014636,'steens4',509678490,'MA','Hayward Street',06452)");
		$conn->exec("INSERT INTO `students` (`alias`,`city`,`first name`,`last name`,`phone`,`rcsID`,`rin`,`st`,`street`,`zip`) VALUES ('Ben','Metuchen','Ben','Gruber',2215369304,'gruberb6',509758394,'NJ','Lally Court',06221)");
		$conn->exec("INSERT INTO `students` (`alias`,`city`,`first name`,`last name`,`phone`,`rcsID`,`rin`,`st`,`street`,`zip`) VALUES ('Sean','Chatham','Sean','Maltby',5219385593,'maltbys12',509849203,'NJ','Lakeside Ave',05463)");
		$conn->exec("INSERT INTO `students` (`alias`,`city`,`first name`,`last name`,`phone`,`rcsID`,`rin`,`st`,`street`,`zip`) VALUES ('Tony','Basking Ridge','Tony','Zheng',1183943845,'zhengt6',509849309,'NJ','Main Street',07453)");
		$conn->exec("INSERT INTO `students` (`alias`,`city`,`first name`,`last name`,`phone`,`rcsID`,`rin`,`st`,`street`,`zip`) VALUES ('Brian','Harvard','Brian','Maeder',4017848872,'maederb3',509986489,'CT','Troy Street',046233)");
		$conn->exec("INSERT INTO `students` (`alias`,`city`,`first name`,`last name`,`phone`,`rcsID`,`rin`,`st`,`street`,`zip`) VALUES ('Tom','Philadelphia','Tom','Wagner',9028787744,'wagnert10',509384920,'PA','18 Ave',06453)");


		$conn->exec("INSERT INTO `grades` (`crn`,`grade`,`rin`) VALUES (12146,89,661482693)");
		$conn->exec("INSERT INTO `grades` (`crn`,`grade`,`rin`) VALUES (11223,74,661479752)");
		$conn->exec("INSERT INTO `grades` (`crn`,`grade`,`rin`) VALUES (19450,92,661472335)");
		$conn->exec("INSERT INTO `grades` (`crn`,`grade`,`rin`) VALUES (12145,95,661479645)");
		$conn->exec("INSERT INTO `grades` (`crn`,`grade`,`rin`) VALUES (12145,86,661481012)");
		$conn->exec("INSERT INTO `grades` (`crn`,`grade`,`rin`) VALUES (12145,90,661471239)");
		$conn->exec("INSERT INTO `grades` (`crn`,`grade`,`rin`) VALUES (12400,88,661482693)");
		$conn->exec("INSERT INTO `grades` (`crn`,`grade`,`rin`) VALUES (34334,78,661472335)");
		$conn->exec("INSERT INTO `grades` (`crn`,`grade`,`rin`) VALUES (21935,86,661481112)");
		$conn->exec("INSERT INTO `grades` (`crn`,`grade`,`rin`) VALUES (21935,76,661479645)");
		$conn->exec("INSERT INTO `grades` (`crn`,`grade`,`rin`) VALUES (34334,82,661481635)");
		$conn->exec("INSERT INTO `grades` (`crn`,`grade`,`rin`) VALUES (11223,89,661479945)");
		$conn->exec("INSERT INTO `grades` (`crn`,`grade`,`rin`) VALUES (22468,96,661471239)");
		$conn->exec("INSERT INTO `grades` (`crn`,`grade`,`rin`) VALUES (20037,95,661482693)");
		$conn->exec("INSERT INTO `grades` (`crn`,`grade`,`rin`) VALUES (22468,93,661479645)");
		$conn->exec("INSERT INTO `grades` (`crn`,`grade`,`rin`) VALUES (19450,85,661481635)");
		$conn->exec("INSERT INTO `grades` (`crn`,`grade`,`rin`) VALUES (19450,79,661482693)");
		$conn->exec("INSERT INTO `grades` (`crn`,`grade`,`rin`) VALUES (13124,84,661472335)");
		$conn->exec("INSERT INTO `grades` (`crn`,`grade`,`rin`) VALUES (12400,86,661481012)");
		$conn->exec("INSERT INTO `grades` (`crn`,`grade`,`rin`) VALUES (21935,76,661479752)");
		$conn->exec("INSERT INTO `grades` (`crn`,`grade`,`rin`) VALUES (20037,82,661471239)");
		$conn->exec("INSERT INTO `grades` (`crn`,`grade`,`rin`) VALUES (19450,62,661481112)");
		$conn->exec("INSERT INTO `grades` (`crn`,`grade`,`rin`) VALUES (11223,67,661481012)");
		$conn->exec("INSERT INTO `grades` (`crn`,`grade`,`rin`) VALUES (12146,45,661479752)");
		$conn->exec("INSERT INTO `grades` (`crn`,`grade`,`rin`) VALUES (20037,83,661481112)");
		$conn->exec("INSERT INTO `grades` (`crn`,`grade`,`rin`) VALUES (12146,89,509483728)");
		$conn->exec("INSERT INTO `grades` (`crn`,`grade`,`rin`) VALUES (19450,92,509482290)");
		$conn->exec("INSERT INTO `grades` (`crn`,`grade`,`rin`) VALUES (12145,95,509403790)");
		$conn->exec("INSERT INTO `grades` (`crn`,`grade`,`rin`) VALUES (12145,86,509675844)");
		$conn->exec("INSERT INTO `grades` (`crn`,`grade`,`rin`) VALUES (12145,90,509678490)");
		$conn->exec("INSERT INTO `grades` (`crn`,`grade`,`rin`) VALUES (12400,88,509758394)");
		$conn->exec("INSERT INTO `grades` (`crn`,`grade`,`rin`) VALUES (34334,78,509849203)");
		$conn->exec("INSERT INTO `grades` (`crn`,`grade`,`rin`) VALUES (21935,86,509849309)");
		$conn->exec("INSERT INTO `grades` (`crn`,`grade`,`rin`) VALUES (21935,76,509986489)");
		$conn->exec("INSERT INTO `grades` (`crn`,`grade`,`rin`) VALUES (34334,82,509384920)");

		$conn->commit();




   } catch(PDOException $e) {
      echo 'ERROR: ' . $e->getMessage();
   }

















?>