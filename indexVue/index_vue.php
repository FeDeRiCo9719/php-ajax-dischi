<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- google font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400&display=swap" rel="stylesheet">
    
    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    
    <link rel="stylesheet" href="../style/style.css">
    <title>Vue-dischi</title>
</head>
<body>

    <!-- HEADER -->
    <?php include __DIR__ . '/../components/header.php'; ?>

    <!-- MAIN -->
    <main id="root">
        <div class="container">
            
            <div class="card" v-for="(item,index) in array" key="index">
                <div class="boxSongImg">
                    <img src="" alt="">
                </div>
                <h3></h3>
                <h5></h5>
                <h5></h5>
            </div>
            
        </div>
    </main>
    
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
    <script src="../Js/script.js"></script>
</body>
</html>