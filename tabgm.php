<?php
include("fonction.php");
$teb = v32();

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
    <h1 class="text-white text-center">Tableau d'employees</h1>
    <!-- </div> -->
    </div>
    

    <div class="text-center">
    
    <table width="1700" height="750" >
    <tr>
        <th> Emploi </th>
        <th> Homme </th>
        <th> Femme </th>
        <th> Salaire moyenne </th>

    </tr>
    <?php foreach($teb as $der){ ?>

    <tr>
        <td><div class="text-danger"><h5><?php echo $der['title'] ?></h5></div></td>
        <td><div class="text-success"><h5><?php echo $der['ma'] ?></h5></div></td>
        <td><div class="text-danger"><h5><?php echo $der['fe'] ?></h5></div></td>
        <td><div class="text-danger"><h5><?php echo $der['ms'] ?></h5></div></td>
    
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




























