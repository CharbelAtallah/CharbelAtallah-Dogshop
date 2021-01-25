<!DOCTYPE HTML>  
<html>
<head>
<style>
.error {color: #FF0000;}
</style>
</head>
<body>  

<?php
// define variables and set to empty values
$nameErr = $emailErr = "";
$firstname = $email = "";


  if (empty($_POST["firstname"])) {
    $nameErr = "First name and surname is required";
  } else {
    $firstname = test_input($_POST["firstname"]);
    // check if name only contains letters and maximum allowed to input is 20
    if (!preg_match("/^[a-zA-Z-']*$/",$firstname)) {
      $nameErr = "Only letters allowed with maximum of 20 letters";
    }
  }
  
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format";
    }
  }

  function sanitizeString($str) {
    $str = preg_replace('/[åä]/ui', 'a', $str);
    $str = preg_replace('/[ö]/ui', 'o', $str);
    return $str;
}
//Test
//$fixMe = "åäö";
//echo sanitizeString($fixMe);

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  $data = str_replace(" ","",$data);
  return $data;
}

?>

<p><span class="error">* required field</span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  Full Name: <input type="text" name="firstname" maxlength="20">
  <span class="error">* <?php echo $nameErr;?></span>
  <br><br>
  E-mail: <input type="text" name="email">
  <span class="error">* <?php echo $emailErr;?></span>
  <br><br>
  <input type="submit" name="submit" value="Submit">  
</form>

<?php
echo "<h2>Your Input:</h2>";
$email = strtolower($email);
echo sanitizeString($email);
echo "<br>";
?>

</body>
</html>