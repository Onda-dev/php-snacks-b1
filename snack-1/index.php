<!-- Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema.
Olimpia Milano - Cantù | 55-60 -->
<?php
$partite = [
    [
        'squadra_casa' => 'Olimpia Milano',
        'squadra_ospite' => 'Cantù',
        'punti_casa' => 55,
        'punti_ospite' => 60
    ],
    [
        'squadra_casa' => 'Tortoreto',
        'squadra_ospite' => 'Atletico Adriatico',
        'punti_casa' => 50,
        'punti_ospite' => 70
    ],
    [
        'squadra_casa' => 'Teramo',
        'squadra_ospite' => 'Salernitana',
        'punti_casa' => 70,
        'punti_ospite' => 80
    ],
    [
        'squadra_casa' => 'Verdy',
        'squadra_ospite' => 'Tokyo',
        'punti_casa' => 55,
        'punti_ospite' => 65
    ],
];

// for ($i=0; $i < count($partite); $i++) { 
//     echo $partite[$i];
// }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <ul>
        <h1>Giornata 1</h1>
        <?php
            for($i = 0; $i < count($partite); $i++) {
                echo "<li>{$partite[$i]['squadra_casa']}-{$partite[$i]['squadra_ospite']} | {$partite[$i]['punti_casa']}-{$partite[$i]['punti_ospite']}</li>";
            }
        ?>
    </ul>
</body>
</html>