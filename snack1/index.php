<?php

$matches = [
    "home" => [
        "team1" => "NB Aquilano",
        "team2" => "Vasto basket",
        "team3" => "Unibasket Lanciano",
        "team4" => "UBS Foligno"
    ],
    "away" => [
        "team1" => "Robur Falconara",
        "team2" => "Virtus Assisi",
        "team3" => "Pallacanestro Pescara",
        "team4" => "BB Pesaro"
    ],
    "pointsHome" => [
        "team1" => "4",
        "team2" => "8",
        "team3" => "12",
        "team4" => "16"
    ],
    "pointsAway" => [
        "team1" => "2",
        "team2" => "4",
        "team3" => "6",
        "team4" => "8"
    ],
];

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
        <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="style.css">
        <title>PHP snack 1</title>
    </head>
    <body>
        <div class="container">
            <h1 class="text-center text-capitalize mt-2 mb-4">partite disputate</h1>

            <p class="mt-3"> <?php echo $matches["home"]["team1"] ." - ". $matches["away"]["team1"] ."  risultato :   ". $matches["pointsHome"]["team1"] . " - " . $matches["pointsAway"]["team1"]; ?>  </p>

            <p class="mt-3"> <?php echo $matches["home"]["team2"] ." - ". $matches["away"]["team2"] ."  risultato :   ". $matches["pointsHome"]["team2"] . " - " . $matches["pointsAway"]["team2"]; ?>  </p>

            <p class="mt-3"> <?php echo $matches["home"]["team3"] ." - ". $matches["away"]["team3"] ."  risultato :   ". $matches["pointsHome"]["team3"] . " - " . $matches["pointsAway"]["team3"]; ?>  </p>

            <p class="mt-3"> <?php echo $matches["home"]["team4"] ." - ". $matches["away"]["team4"] ."  risultato :   ". $matches["pointsHome"]["team4"] . " - " . $matches["pointsAway"]["team4"]; ?>  </p>

        </div>


    </body>
</html>
