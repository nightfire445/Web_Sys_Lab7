<?php
  if (session_status() == PHP_SESSION_NONE) {
    session_start();
  }

  include('config.php');
  try{

    
    $host = $config['DB_HOST'];
    $user =  $config['DB_USERNAME'];
    $pass = $config['DB_PASSWORD'];
    $dbname = $config['DB_NAME'];
    
    
    $dbconn = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
  }

  catch (Exception $e){
    echo "Error: " . $e->getMessage();
  }
  //If Logged in
  if ( isset($_SESSION['username']) ){
    //Get History
    $history = $dbconn->prepare('SELECT courseName, courseID FROM courses ORDER BY `courseName`');
    $history->execute(array(':username' => $_SESSION['username']));
    $res = $history->fetchAll();

    
  }
  
 ?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <title></title>
    
  </head>
  <body>
   
    
    <!-- If Logged in-->
    <section style="margin-left: 25px;"> 
    <?php if(isset($_SESSION['username']) ):{ 
     //Echo out form to hold history-->
        echo '<form action="signin.php" method="post" class="medium-6 columns" id="class-form">';
      //<br> should be done in css not php 
      //Echo out their history as radio buttons -->
      foreach($res as $row) {
        echo '<input type="radio" name="classID" id="input" value="'.$row['courseID'].'"></input>'. $row['courseName'] . "\t"; echo "<br>"; 
      }
      //Echo out input submit, closing input, form, and insert script with foundation required function call
      echo '<input id ="input_submit" type="submit" name="class" value="Submit" class="btn btn-secondary"></input></form>';
    }?>
    </section>     

        

     <?php else: //Redirect to index
      $host  = $_SERVER['HTTP_HOST'];
      $uri   = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
      $extra = 'index.php';
      header("Location: http://$host$uri/$extra"); 
      ?>
      


    


     <?php endif; ?>



    <footer>
    </footer>
  </body>
</html>


















