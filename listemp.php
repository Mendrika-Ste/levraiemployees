
<?php

include("fonction.php");
// $result = deplist();
$result2 = farany($_GET["dept"]);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <h1>List des employees de ce departement (<?php echo $_GET["dept"] ?>):</h1>

    <ul>
        <?php foreach($result2 as $der){ ?>

        <li><a href="emp.php?idemp=<?php echo $der['emp_no'] ?>"> <?php echo $der['first_name'] ?> <?php echo $der['last_name'] ?> </a></li>
    <?php } ?>

    </ul>
    <!-- <table border=1 width="800" height="700" >
    <tr>
        <th>Id du departement</th>
        <th>Nom du departement</th>
        <th>Nom du manager present</th>
        
    </tr>

    <?php foreach($result2 as $der){ ?>

    <tr>
        <td><?php echo $der['id'] ?></td>
        <td><a href="listemp.php?dept=<?php echo $der['id'] ?>"><?php echo $der['dept_name'] ?></a></td>
        <td><?php echo $der['first_name'] ?> <?php echo $der['last_name'] ?></td>
    </tr>
    <?php } ?>

    </table> -->





</body>
</html>











































































