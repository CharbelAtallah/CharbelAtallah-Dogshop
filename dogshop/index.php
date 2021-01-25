<?php 

include 'App.php';

$Types = $_GET['type'] ?? '';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Le Blu</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
<link rel="stylesheet" href="../dogshop/style.css">
<style>
    body {
      background-color: grey;
      background-repeat: no-repeat;
      background-attachment: fixed;
      background-size: 100% 100%;
    }
  </style>
</head>

<body class="container">

<!-- The navigation menu -->
<div class="navbar">
  <a href="../html_document/home.html">TITLE 1</a>
  <div class="subnav">
    <a href="../html_document/article.html">TITLE</a>
  </div>
  <a href="../html_document/contact.html">TITLE</a>
  <p class="warhistory">TITLE 1</p>
</div>

<button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Login </button>

<div id="id01" class="modal">

  <form class="modal-content animate" action="../dogshop/index.php" method="post">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close"
        title="Close Modal">&times;</span>
    </div>

    <div class="container">
     
      <label for="uname"> <b>Username</b> </label>
      <input type="text" id="uname" placeholder="Enter Username" name="uname" required>

      <label for="psw"><b>Password</b></label>
      <input type="password" id="psw" placeholder="Enter Password" name="psw" required>

      <button type="submit">Login</button>
      <label>
        <input type="checkbox" checked="checked" name="remember"> Remember me
      </label>
    </div>

    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id01').style.display='none'"
        class="cancelbtn">Cancel</button>
      <span class="psw"><a href="../html_document/forgotpass.html">Sign Up!</a></span>
    </div>
  </form>
</div>

<div class="container-fluid">
  <h1 class="mt-4 text-center">Swedish Rescue Dog</h1>

  <a class="btn1 btn1-primary" href="../html_document/article.html">Click here for more Article's</a>

      </div>
          <h3 class="display-10 text-center bg-secondary text-light">Swedish Rescue Dog - 
          <div class="text-center bg-primary text-light">
          <span class="badge rounded-pill bg-primary text-light">
              <a class="text-light btn-lg" href="?category=Male">Male</a>
          </span>
          <span class="badge rounded-pill bg-primary text-light">
              <a class="text-light btn-lg" href="?category=Female">Female</a>
          </span>
        </div>

     <?php echo $Types;?></h3>


    <?php 
    App::main($Types);
    ?>

     <!-- Footer -->
  <footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; Swedish Rescue Dog 2021</p>
    </div>
    <!-- /.container -->
  </footer>
  
</body>

</html>