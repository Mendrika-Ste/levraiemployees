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
    <h1 class="text-white text-center">Changer de departement</h1>
    </div> 
    <form action="emp.php" method="get">
        <br><br><br><br>
        <div class="text-center"><h2>Choix de departement:<br><input type="text" name="dep"></h2></div><br><br><br><br>
        <div class="text-center"><h2>Date de debut:<br><input type="date" name="date"></h2></div><br><br><br><br>
        <div class="text-center"><button class="btn btn-danger">OK</button></div><br><br><br><br>
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