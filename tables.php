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
    <title>Document</title>
</head>
<body>
    <h1>Resultat de Recherche</h1>
    <table border=1 >
        <tr>
            <td>Nom employees</td>
            <td>Age</td>
            <td>Genre</td>
        </tr>
        
        <?php foreach($res as $de){ ?>
        <tr>
            <td><?php echo $de['first_name'] ?> <?php echo $de['last_name'] ?></td>
            <td><?php echo $de['age'] ?></td>
            <td><?php echo $de['gender'] ?></td>
        </tr>
        <?php } ?>
    </table>

    <a href="#">Suivant</a>
    <a href="#">Precedent</a>






</body>
</html>




























