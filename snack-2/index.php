<!-- Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato” -->

<?php

$name = $_GET['name'];
$mail = $_GET['mail'];
$age = $_GET['age'];

if (strlen($name) > 3){
    echo "Nome inoltrato correttamente";
} else {
    echo "$nome è troppo breve";
}

if (!filter_var($mail, FILTER_VALIDATE_EMAIL)){
    echo "L'indirizzo email $mail è valido";
} else {
    echo "L'indirizzo email $mail non è valido";
}

if (is_numeric($age)){
    echo "Età inoltrata correttamente";
} else {
    echo "$age non è un numero";
}
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
    <form action="" method="GET">
        <input type="text" name="name" placeholder="name">
        <input type="text" name="age" placeholder="age">
        <input type="text" name="mail" placeholder="mail">
        <button type="submit">invia</button>
    </form>
</body>
</html>