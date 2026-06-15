<?php

include("fonction.php");
$result = deplist();
$result2 = deplistaddman();

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="bootstrap/font/bootstrap-icons.css">
    <link rel="stylesheet" href="style.css">

</head>
<body>

   
    <div class="container">
    <div class="bg-primary text-white p-3">
    <!-- <div class="mt-3 py-5"> -->
    <h1 class="text-white text-center">Liste de departement</h1>
    <!-- </div> -->
    </div>
    

    <div class="text-center">
    
    <table width="1700" height="750" >
    <tr>
        <th>Id du departement</th>
        <th>Nom du departement</th>
        <th>Nom du manager present</th>
        
    </tr>
    <?php foreach($result2 as $der){ ?>

    <tr>
        <td><div class="text-danger"><h5><?php echo $der['id'] ?></h5></div></td>
        <td><h5><a href="listemp.php?dept=<?php echo $der['id'] ?>"><?php echo $der['dept_name'] ?></h5></a></td>
        <td><div class="text-success"><h5><?php echo $der['first_name'] ?> <?php echo $der['last_name'] ?></h5></div></td>
    </tr>
    <?php } ?>

    </table>
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











































