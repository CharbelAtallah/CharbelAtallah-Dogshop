<?php 

include 'App.php';

$Types = $_GET['type'] ?? '';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buddy Pets Food</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
<link rel="stylesheet" href="../dogshop/style.css">
<style>
    body {
      background-color: white;
      background-repeat: no-repeat;
      background-attachment: fixed;
      background-size: 100% 100%;
    }
  </style>
</head>

<body class="container">

<button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Logga in </button>

<div id="id01" class="modal">

  <form class="modal-content animate" action="../dogshop/index.php" method="post">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close"
        title="Close Modal">&times;</span>
    </div>

    <div class="container">

<label for="uname"> <b>Användarnamn</b> </label>
<input type="text" id="uname" placeholder="Ange användarnamn" name="uname" required>

<label for="psw"><b>Lösenord</b></label>
<input type="password" id="psw" placeholder="Ange lösenord" name="psw" required>

<button type="submit">Logga in</button>
<label>
  <input type="checkbox" checked="checked" name="remember"> Kom ihåg mig
</label>
</div>

<div class="container" style="background-color:#f1f1f1">
<button type="button" onclick="document.getElementById('id01').style.display='none'"
  class="cancelbtn">Avbryt</button>
<span class="psw"><a href="../dogshop/forgotpass.html">Registrera dig!</a></span>
</div>
</form>
</div>


<div class="container-fluid">

<div class="text-center"><img src="../dogshop/Image/buddy.png" width="300" height="300" ;alt="Logga"></div> <br>


     

    <?php 
    App::main($Types);
    ?>

      <a class="btn1 btn1-primary" href="../dogshop/contactinfo.html" target="_blank">Kundtjänst</a> <br>
      <a class="btn1 btn1-primary" href="../dogshop/contactform.html" target="_blank">Klicka här för att skicka ett meddelande</a>

     <!-- Footer -->
  <footer class="py-5 bg-white">
    <div class="container">
      <p class="m-0 text-center text-dark">Copyright &copy; Buddy Pets Food 2021 <br><img src="../dogshop/Image/25.png" alt="25 års jubileum" width="80" height="50"></p>
    </div>
    <!-- /.container -->
  </footer>
  
</body>

</html>