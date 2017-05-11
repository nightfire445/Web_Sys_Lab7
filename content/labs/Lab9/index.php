<?php 


require 'config.php';

if( isset($_GET['choice_1']) ){
	
  include 'install.php';
  echo 'Database has been created.';
}

if( isset($_GET['choice_2']) ){
	
  include 'insert.php';
  
  

}


if( isset($_GET['choice_3']) ){
	
  include 'output.php';
  

}

if( isset($_GET['choice_4]']) ){
	
  include 'output.php';
  

}

?>

<!doctype html>
<html>
<head>
	<title></title>
</head>
<body>

<a href= "index.php?choice_1" class = 'button'>Install</a>
<a href= "index.php?choice_2" class = 'button'>Load</a>
<a href= "index.php?choice_3" class = 'button'>Students</a>
<a href= "index.php?choice_4" class = 'button'>Grade Distribution</a>





</body>
</html>