<?php 
include("fonction.php");
$result = lesdep();


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <h1>Recherche</h1>
        <form action="tables.php" method="get">
            <select name="dep" >
                <?php foreach($result as $der){ ?>
                    <option value="<?php echo $der['dept_name'] ?>"><?php echo $der['dept_name'] ?></option>                             
                   <? } ?>
            </select>
        
        <p>Nom employee :<input type="text" name="nomemp"></p>
        <p>Age min :<input type="number" name="amin" ></p>
        <p>Age max :<input type="number" name="amax" ></p>
        <input type="submit" value="OK">
    </form>
</body>
</html>






































