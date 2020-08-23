<?php
  $num1 = $_GET['first-number'];
  $num2 = $_GET['second-number'];
  $opt = $_GET['operator'];
  $answer = $_GET['answer'];
  function add()
  {
    global $num1,$num2,$answer;
    $answer = $num1 + $num2;
    return $answer;
  }
  function sub()
  {
    global $num1,$num2,$answer;
    $answer = $num1 - $num2;
    return $answer;
  }
  function div()
  {
    global $num1,$num2,$answer;
    $answer = $num1 / $num2;
    return $answer;
  }
  function mul()
  {
    global $num1,$num2,$answer;
    $answer = $num1 * $num2;
    return $answer;
  }
  function mod()
  {
    global $num1,$num2,$answer;
    $answer = $num1 % $num2;
    return $answer;
  }

if(isset($_GET['submit'])){
  if($opt == "+"){
    add();
  }
  elseif ($opt == "-") {
    sub();
  }
  elseif ($opt == "%") {
    mod();
  }
  elseif ($opt == "*") {
    mul();
  }
  elseif ($opt == "/") {
    div();
  }
  else {
    echo "<h3>Please choose an operator </h3>";
  }

}

 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>CAL</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <header>
      <h2>Calculator</h2>
    </header>
    <main>
      <section>
        <form class="form-item" action="index.php" method="get">
          <div class="form-container">
            <input class="input-item" type="number" name="first-number" value="0">
          </div>

          <div class="form-container">
            <select class="input-item" name="operator">
              <option value="+">+</option>
              <option value="*">*</option>
              <option value="/">/</option>
              <option value="-">-</option>
              <option value="%">%</option>
            </select>
          </div>

          <div class="form-container">
            <input class="input-item" type="number" name="second-number" value="0">
          </div>

          <div class="form-container">
            <input class="input-item" type="text" name="equalto" value=" = " readonly>
          </div>

          <div class="form-container">
            <input class="input-item" type="text" name="answer" value="<?php echo $answer; ?>" readonly>
          </div>

          <div >
            <input class="btn" type="submit" name="submit" value="Cal">

          </div>
        </form>
      </section>
    </main>
  </body>
</html>
