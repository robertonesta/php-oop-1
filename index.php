<?php

include __DIR__ . "/movie.php" ;
include __DIR__ . "/array.php" ;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>OOP</title>
</head>
<body>
    <header>
        <h1 class="text-center">Movies</h1>
    </header>
    <main>
        <div class="container">
            <div class="row">
                <?php foreach ($movies as $movie): ?>
                    <div class="col-4">
                        <div class="card m-3">
                            <div class="card-header">
                                <h4 class="text-center">
                                    <?php echo ($movie->name) ?>
                                </h4>
                            </div>
                            <div class="card-body d-flex flex-column">
                                <span>Genre: <?php echo ($movie->genre) ?></span>
                                <span>Release Year: <?php echo ($movie->release_year) ?></span>
                            </div>
                        </div>
                    </div>
                <?php endforeach ?>
            </div>
        </div>
    </main>
</body>
</html>