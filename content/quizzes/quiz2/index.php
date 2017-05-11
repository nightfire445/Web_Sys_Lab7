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
  

  if (isset($_POST['login']) && isset($_POST['password'])  && isset($_POST['username']) ){
    //Obtain User's Salt
    $select_salt = $dbconn->prepare("SELECT salt FROM user WHERE username = :username");
    $select_salt->execute(array(':username' => $_POST['username']));
    $res = $select_salt->fetch();
    $salt = (isset($res) ) ? $res['salt'] : '';


    $raw_pass = $_POST['password'];
    //Hash the Salt and Raw Pass

    $hashed_salt = hash('sha256', $salt . $raw_pass);
 
    //Obtain the user info
    $stmt = $dbconn->prepare('SELECT * FROM user WHERE username=:username AND password = :password');
    $stmt->execute(array(':username' => $_POST['username'], ':password' => $hashed_salt));

    //If the login is successful
    if ($user = $stmt->fetch()){
        $_SESSION['username'] = $user['username'];
        $_SESSION['uid'] = $user['uid'];
       
        $msg = 'Succesfully Logged in';
        header('Location: class.php');
        exit();
    }
    else if(isset($_POST['login']) && isset($_POST['password'])){
        $stmt = $dbconn->prepare('SELECT username FROM user WHERE username=:username');
        $stmt->execute(array(':username' => $_POST['username']));
        if(!$stmt->fetch()){
          $msg = 'Succesfully Logged in';
          header('Location: register.php');
          exit();
         
          

        }
        else{
          if(isset($_POST['password']) &&  $_POST['password'] == "" ){
            $msg = "Password must not be left blank.";

          }
          else{
             $msg = 'Wrong username or password';
          }
           
        }
        
      }
  
  }

 ?>

<!DOCTYPE html>
<html lang="en" >

<head>
 
  <title></title>

</head>

 

<body>
  

  <div id="form-wrapper">
    

   <form action="index.php" method="post" id="login-form" onsubmit="return validate_login(this);" class="medium-6 columns">
     <h1 class="title">Log In</h1>
     <?php if (isset($msg)) echo "<p class=\"err-msg\">$msg</p>"; $msg = NULL;?>
     <section >
        <label for="name">Username:
          <input type="text" class="form-control" placeholder="Name" name="username" id="name" />
        </label>
     </section>

     <section >
         <label for="password">Password: 
         <input class="form-control" type="password" name="password" id="password" />
         </label>
     </section>

     <div class="form-group">
       <input id="submit" type="submit" class="btn btn-primary" name="login" value="Login" />
     </div>
       
  
   </form>
  </div>
  


</body>
</html>
