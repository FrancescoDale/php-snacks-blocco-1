<?php

$name = $_GET["name"];
$age = $_GET["age"];
$mail = $_GET["mail"];

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
        <title>PHP snack 2</title>
    </head>
    <body>
        <div class="container">
            <h1 class="text-center text-capitalize mt-2 mb-4">status accesso : </h1>

            <p class="text-capitalize text-center">
                <?php if (strlen($name) > 3) {
                    echo "accesso riuscito";
                } else {
                    echo "accesso negato";
                }
                ?>
            </p>

        </div>
    </body>
</html>
