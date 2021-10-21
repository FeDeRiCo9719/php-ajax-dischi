<?php
include __DIR__ . '/database/data.php';
// var_dump($database[0]["title"])
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style.css">
    <title>php-ajax-dischi</title>
</head>
<body>
    <!-- HEADER -->
    <?php include __DIR__ . '/components/header.php'; ?>

    <!-- MAIN -->
    <main>
        <div class="container">
            <div class="card"></div>
            <div class="card"></div>
            <div class="card"></div>
            <div class="card"></div>
            <div class="card"></div>
        </div>
    </main>
    
</body>
</html>