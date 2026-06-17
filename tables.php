<?php 
    include("fonction.php");
    $dep= $_GET['dep'];
    $nom= $_GET['nomemp'];
    $amin= $_GET['amin'];
    $amax= $_GET['amax'];
    $res= cherche($dep,$nom,$amin,$amax);
    
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
    <h1 class="text-white text-center">Resultat de Recherche</h1>
    </div>
    <table width=1200 >
        <tr>
            <th>Nom employees</th>
            <th>Age</th>
            <th>Genre</th>
        </tr>
        
        <?php foreach($res as $de){ ?>
        <tr>
            <td><?php echo $de['first_name'] ?> <?php echo $de['last_name'] ?></td>
            <td><?php echo $de['age'] ?></td>
            <td><?php echo $de['gender'] ?></td>
        </tr>
        <?php } ?>
    </table>
    <!-- </div> -->


    <a href="#">Suivant</a>
    <a href="#">Precedent</a>

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




























