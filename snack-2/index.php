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

    echo $risultato;
?>
