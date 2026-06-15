<?php 
include("fonction.php");
$result = lesdep();


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
    <h1 class="text-white text-center">Recherche</h1>
    </div>    
        
        <form action="tables.php" method="get">
            <div class="text-center">

    <title>Document</title>
</head>
<body>
        <div class="container">
    
    <h1>Recherche</h1>
        <form action="tables.php" method="get">
            <select name="dep" >
                <?php foreach($result as $der){ ?>
                    <option value="<?php echo $der['dept_name'] ?>"><?php echo $der['dept_name'] ?></option>                             
                   <? } ?>
            </select>
            
        
        <div class="text-center"><h2>Nom employee :</br><input type="text" name="nomemp"></h2></div><br><br>
        <div class="text-center"><h2>Age min :</br><input type="number" name="amin" ></h2></div><br><br>
        <div class="text-center"><h2>Age max :</br><input type="number" name="amax" ></h2></div><br><br>
        <div class="text-center"><button class="btn btn-danger">OK</button></div>
    
    
    </form>
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






































