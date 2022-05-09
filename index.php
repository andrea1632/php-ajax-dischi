<?php
include_once __DIR__ . './api/api.php';
?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dischi</title>
    <!-- bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body class="bg-dark">
    <div class="container p-1">
        <div class="row justify-content-center">
        <?php foreach($database as $disk): ?>
            <div class="card bg-secondary me-3 mb-3" style="width: 20rem;">
            <img src="<?= $disk['poster'] ?>" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title text-center fw-balder text-white"><?= $disk['title'] ?></h5>
                <p class="card-text text-light text-center"><?= $disk['author'] ?></p>
                <p class="card-test text-light text-center"><?= $disk['year'] ?></p>
                <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
            </div>
            </div> 
        <?php endforeach; ?>
        </div>
    </div>
</body>
</html>