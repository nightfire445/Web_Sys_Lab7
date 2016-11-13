<?php 
  abstract class Operation {
    protected $operand_1;
    protected $operand_2;
    public function __construct($o1, $o2) {
      // Make sure we're working with numbers...
      if (!is_numeric($o1) || !is_numeric($o2)) {
        throw new Exception('Non-numeric operand.');
      }
      
      $this->operand_1 = $o1;
      $this->operand_2 = $o2;
    }
    public abstract function operate();
    public abstract function getEquation(); 
  }

  class Addition extends Operation {
    public function operate() {
      return $this->operand_1 + $this->operand_2;
    }
    public function getEquation() {
      return $this->operand_1 . ' + ' . $this->operand_2 . ' = ' . $this->operate();
    }
  }


// Part 1 - Add subclasses for Subtraction, Multiplication and Division here

  class Subtraction extends Operation {
    public function operate() {
      return $this->operand_1 - $this->operand_2;
    }
    public function getEquation() {
      return $this->operand_1 . ' - ' . $this->operand_2 . ' = ' . $this->operate();
    }
  }


  class Multiplication extends Operation {
    public function operate() {
      return $this->operand_1 * $this->operand_2;
    }
    public function getEquation() {
      return $this->operand_1 . ' * ' . $this->operand_2 . ' = ' . $this->operate();
    }
  }

  class Division extends Operation {
    public function operate() {
      return $this->operand_1 / $this->operand_2;
    }
    public function getEquation() {
      return $this->operand_1 . ' / ' . $this->operand_2 . ' = ' . $this->operate();
    }
  }


  class Cube extends Operation {
    public function __construct($o1) {
      // Make sure we're working with numbers...
      if (!is_numeric($o1) ) {
        throw new Exception('Non-numeric operand.');
      }
      
      $this->operand_1 = $o1;
    }
    public function operate() {
      return $this->operand_1*$this->operand_1*$this->operand_1;
    }
    public function getEquation() {
      return $this->operand_1 . '^3' . ' = ' . $this->operate();
    }
  }


  class Factorial extends Operation {
    public function __construct($o1) {
      // Make sure we're working with numbers...
      if (!is_numeric($o1)) {
        throw new Exception('Non-numeric operand.');
      }
      
      $this->operand_1 = $o1;
    }

    public function operate() {
      $num = 1;
      $cap = $this->operand_1;
      for($i=1; $i<$this->operand_1+1; $i++){
        $num*=$i;
      }
      return $num;
    }
    public function getEquation() {
      return $this->operand_1 . ' ! ' . ' = ' . $this->operate();
    }
  }

// End Part 1





// Some debugs - un comment them to see what is happening...
// echo '$_POST print_r=>',print_r($_POST);
// echo "<br>",'$_POST vardump=>',var_dump($_POST);
// echo '<br/>$_POST is ', (isset($_POST) ? 'set' : 'NOT set'), "<br/>";
// echo "<br/>---";




// Check to make sure that POST was received 
// upon initial load, the page will be sent back via the initial GET at which time
// the $_POST array will not have values - trying to access it will give undefined message

  if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $o1 = $_POST['op1'];
    $o2 = $_POST['op2'];
  }
  $err = Array();


// Part 2 - Instantiate an object for each operation based on the values returned on the form
//          For example, check to make sure that $_POST is set and then check its value and 
//          instantiate its object
// 
// The Add is done below.  Go ahead and finish the remiannig functions.  
// Then tell me if there is a way to do this without the ifs

  try {
    if  (isset($_POST['add']) && $_POST['add'] == 'Add') {
      $op = new Addition($o1, $o2);
    }
    if (isset($_POST['subtract']) && $_POST['subtract'] == 'Subtract') {
      $op = new Subtraction($o1, $o2);
    }
    if (isset($_POST['multiplication']) && $_POST['multiplication'] == 'Multiplication') {
      $op = new Multiplication($o1, $o2);
    }
    if (isset($_POST['division']) && $_POST['division'] == 'Division') {
      $op = new Division($o1, $o2);
    }
    if (isset($_POST['cube']) && $_POST['cube'] == 'Cube') {
      $op = new Cube($o1);
    }
    if (isset($_POST['factorial']) && $_POST['factorial'] == 'Factorial') {
      echo $_POST['factorial'];
      $op = new Factorial($o1);
    }
 
  }
  catch (Exception $e) {
    $err[] = $e->getMessage();
  }
?>

<!doctype html>
<html>
<head>
<title>Lab 7</title>
</head>
<body>
  
  <p>Result:</p>
  <pre id="result">
  </output>
  <?php 
    if (isset($op)) {
      try {
        echo "<output>";
        echo $op->getEquation();
        echo "</output>";
      }
      catch (Exception $e) { 
        $err[] = $e->getMessage();
      }
    }
      
    foreach($err as $error) {
        echo $error . "\n";
    } 
 
 
  echo'
  </pre>
  <form method="post" action="lab7.php">
    <input type="text" name="op1" id="name" value="First Operand" />
    <input type="text" name="op2" id="name" value="Second Operand" />
    <br/>
    <!-- Only one of these will be set with their respective value at a time -->
    <input type="submit" name="add" value="Add" />  
    <input type="submit" name="subtract" value="Subtract" />  
    <input type="submit" name="multiplication" value="Multiplication" />  
    <input type="submit" name="division" value="Division" />
    <input type="submit" name="factorial" value="Factorial" />  
    <input type="submit" name="cube" value="Cube" />    
  </form>
</body>
</html>';

 ?>
