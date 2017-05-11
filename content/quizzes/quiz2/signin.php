<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

 if(isset($_POST['logout']) && isset($_SESSION['username']))
  {
    unset($_SESSION['username']);
    unset($_SESSION['uid']);
    $msg = "You have been logged out.";
  }

  //if Logged in
  if(isset($_SESSION['username']) ){

    $configs = include('config.php');
    try{


      $host = $config['DB_HOST'];
      $user = $config['DB_USERNAME'];
      $pass = $config['DB_PASSWORD'];
      $dbname = $config['DB_NAME'];
        
      $dbconn = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
    }

    catch (Exception $e){
      echo "Error: " . $e->getMessage();
    }


    $date = date("Y-m-d");
    $time = date("H:i:s");
    $username = $_SESSION['username'];
    $courseID = $_POST['classID'];  

    echo "Logged into ".$courseID. " at ".$date . " ". $time;
 

    $insert = $dbconn->prepare(  'INSERT INTO `attendance` (`username`,`date`, `time`, `courseID`) VALUES (:username, :date, :time, :courseID)');

    $insert->execute( array(':username' => $_SESSION['username'], ':date' => $date, ':time' => $time, ':courseID' => $_POST['classID'] ) );
    //print_r($history_insert->errorInfo());

  }


?>

<!DOCTYPE html>

<html class="no-js" lang="en" >

<head>
  <title></title>
</head>



<body>


  <div id="form-wrapper">
      <form action="login.php" method="post" id="logout-form" class="medium-6 columns">
        <section>
        <h1>Log Out</h1>
        <?php if (isset($msg)) echo "<p class=\"err-msg\">$msg</p>"; $msg = NULL; ?>
        </section>
        <section>
        <input id="submit" class="btn btn-secondary" type = "submit" name="logout" value="logout" />
        </section>
      </form>

  </div>
  
</body>
</html>