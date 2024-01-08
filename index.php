<?php
require_once __DIR__ . "/Models/Movie.php";
require_once __DIR__ . "/Models/Info.php";

$Wonder = new Movie("Wonder", "Drammatico", 90, new Info("ita", "Stephen Chbosky"));

$movies = [

    $Wonder,

    new Movie("Reptile", "Thriller", 120, new Info("ing", "Grant Singer")),

    new Movie("Nowhere", "Thriller", 110, new Info("spa", "Albert Pintò")),
];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div>
        <h1>Movies :</h1>

        <div>

            <?php foreach ($movies as $movie) { ?>
                <h3> <?php echo $movie->titolo ?> </h3>

                <ul>
                    <li> Genere: <?php echo $movie->genere ?> </li>
                    <li> Minuti: <?php echo $movie->minuti ?> </li>
                    <li> Lingua: <?php echo $movie->info->lingua ?> </li>
                    <li> Regista: <?php echo $movie->info->regista ?> </li>

                </ul>

            <?php } ?>

        </div>

    </div>
</body>

</html>