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
    <style>
    body{
        background-color:blue;
    }
        
    </style>
</head>

<body class="container">


<h1 class="display-1 text-center bg-primary text-light"><b>Le Blu</b></a></h1> <br>

    <div class="text-center bg-primary text-light">
    <span class="badge rounded-pill bg-primary text-light">
            <a class="text-light btn-lg" href="?type=men clothing">Male</a>
        </span>
        <span class="badge rounded-pill bg-primary text-light">
            <a class="text-light btn-lg" href="?type=women clothing">Female</a>
        </span>
        <span class="badge rounded-pill bg-primary text-light">
            <a class="text-light btn-lg" href="?type=jewelery">Jewelery</a>
        </span>

    </div>
    <br>
    <div class="text-center"><img src="../Uppgift_02/images/maxresdefault.jpg" width="200" height="100" ;alt="Le Blu"></div> <br>

    <h3 class="display-10 text-center bg-primary text-light">Le Blu - 
    <?php echo $Types;?></h3>
    <?php 
    App::main($Types);
    ?>
</body>

</html>