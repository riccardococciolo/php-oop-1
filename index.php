<?php

require_once __DIR__ . "/Models/Movies.php";
require_once __DIR__ . "/db.php";

$movies = [];

foreach ($moviesData as $movieData) {
    $movies[] = new Movie($movieData[0], $movieData[1], $movieData[2]);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista dei Film</title>
</head>
<body>

<h1>Lista dei Film</h1>

<ul>
    <?php foreach ($movies as $movie) { ?>
    <li>
        <?php $movie->printMovie(); ?>
    </li>
    <?php } ?>
</ul>

</body>
</html>