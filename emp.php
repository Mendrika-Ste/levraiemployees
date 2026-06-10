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
    <title>Document</title>
</head>
<body>
    
<h1>Fiche :</h1>

<table border=1>
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
        <th><?php echo $gum['emp_no'] ?></th>
        <th><?php echo $gum['birth_date'] ?></th>
        <th><?php echo $gum['gender'] ?></th>
        <th><?php echo $gum['first_name'] ?></th>
        <th><?php echo $gum['last_name'] ?></th>
        <th><?php echo $gum['dept_name'] ?></th>
        <th><?php echo $gum['hire_date'] ?></th>
    </tr>
    <?php } ?>
</table>



<h2>Historique de son salaire :</h2>
    <?php foreach($fe as $per){ ?>
    <p>Debut : <?php echo $per['from_date'] ?>  et  Fin : <?php echo $per['to_date'] ?></p>
<?php } ?>





<h2>Historique de son emploi :</h2>
    <?php foreach($se as $ser){ ?>
    <p>Debut : <?php echo $ser['from_date'] ?>  et   Fin : <?php echo $ser['to_date'] ?></p>
<?php } ?>




</body>
</html>


































