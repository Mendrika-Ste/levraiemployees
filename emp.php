<?php 
include("fonction.php");
$grove = fichemp($_GET["idemp"]);
$fe= salhis($_GET["idemp"]);
$se= histo($_GET["idemp"]);

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
    <h1 class="text-white text-center">Fiche</h1>
    </div>    

<div class="text-center">
<table border=1 width=1290 height=80>
    <tr>
        <th>Id</th>
        <th>Date de naissance </th>
        <th>Genre</th>
        <th>Prenom</th>
        <th>Nom de famille</th>
        <th>Departement</th>
        <th>Date d'engagement</th>
    </tr>
    <?php foreach($grove as $gum){ ?>
    <tr>
        <td><?php echo $gum['emp_no'] ?></td>
        <td><?php echo $gum['birth_date'] ?></td>
        <td><?php echo $gum['gender'] ?></td>
        <td><?php echo $gum['first_name'] ?></td>
        <td><?php echo $gum['last_name'] ?></td>
        <td><?php echo $gum['dept_name'] ?></td>
        <td><?php echo $gum['hire_date'] ?></td>
    </tr>
    <?php } ?>
</table>



<h2>Historique de son salaire :</h2>
    <?php foreach($fe as $per){ ?>
    <div class="text-success"><p>Debut : <?php echo $per['from_date'] ?>  et  Fin : <?php echo $per['to_date'] ?></p></div>
<?php } ?>





<h2>Historique de son emploi :</h2>
    <?php foreach($se as $ser){ ?>
    <div class="text-danger"><p>Debut : <?php echo $ser['from_date'] ?>  et   Fin : <?php echo $ser['to_date'] ?></p></div>
<?php } ?>
</div>



<a href="recherche.php">Recherche</a>

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


































