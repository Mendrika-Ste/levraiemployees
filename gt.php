<?php

include("fonction.php");
$result = deplist();


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="bootstrap/font/bootstrap-icons.css">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <div class="container">
    <div class="bg-primary text-white p-3">
    <!-- <div class="mt-3 py-5"> -->
    <h1 class="text-white text-center">Liste de departement</h1>
    <!-- </div> -->
    </div>
    

    <div class="text-center">
    <ul>
        <?php foreach($result as $dep){ ?> 
        <li><?php echo $dep['dept_name'] ?></li>
        <? } ?>
    </ul>
    </div>
        <footer>
        <div class="rounded-5 bg-success p-3">
        <!-- <div class="mt-3 py-5"> -->
            <p class="text-white text-center">ETU004699-ETU004731</p>
        <!-- </div> -->
        </div>
        </footer>
    </div>




</body>
</html>











































