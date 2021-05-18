<?php 
    // Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione)
    // che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero.
    // Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato”

    $name = $_GET['name'];
    $email = $_GET['email'];
    $age = $_GET['age'];

    $risultato = 'Accesso Riuscito';
    if( strlen($name) <= 3) {
        $risultato = 'Accesso Negato';
    }

    if( strpos($email, '@') === false || strpos($email, '.') === false ) {
        $risultato = 'Accesso Negato';
    }

    if( is_numeric($age) === false ) {
        $risultato = 'Accesso Negato';
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 2</title>
</head>
<body>
    <div>
        <h1>
            <?php echo $risultato; ?>
        </h1>
    </div>
</body>
</html>