<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <title>Exercice 6</title>
</head>
<body>
    <p>
        Créer une fonction qui retourne l'addition de trois nombres : 
    </p>
    <div class="col-3 mx-auto mt-5 text-center" style="border: burlywood 2px solid;">
        <?php

            function sumOfThreeNumbers($number1, $number2, $number3){
                $sum = $number1 + $number2 + $number3;
                echo $number1. ' + ' .$number2. ' + ' .$number3. ' = ' .$sum;
                return $sum;
            }

            sumOfThreeNumbers(10, 58, 72);
        ?>
    </div>
</body>
</html>