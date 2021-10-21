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

            <?php foreach ( $database as $key => $data ) {  ?>
                <div class="card">
                    <div class="boxSongImg">
                        <img src="<?php echo $data['poster'] ?>" alt="">
                    </div>
                    <h3><?php echo $data['title'] ?></h3>
                    <h5><?php echo $data['author'] ?></h5>
                    <h5><?php echo $data['year'] ?></h5>
                </div>
            <?php } ?>

        </div>
    </main>
    
</body>
</html>