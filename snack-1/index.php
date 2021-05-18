<?php 

// Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario.
// Ogni array avrà una squadra di casa e una squadra ospite, 
// punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. 
// Stampiamo a schermo tutte le partite con questo schema.
// Olimpia Milano - Cantù | 55-60

$partite = [
    [
        'casa' => 'Oracoli di MElfi',
        'trasferta' => 'Yuggoth Riders',
        'puntiCasa' => 0,
        'puntiTrasf' => 2,
    ],
    [
        'casa' => 'InfamElfi',
        'trasferta' => "AvvelenaTori dell'Erebo",
        'puntiCasa' => 1,
        'puntiTrasf' => 1,
    ],
    [
        'casa' => 'Aptrgangr',
        'trasferta' => 'GuElfi Alti',
        'puntiCasa' => 2,
        'puntiTrasf' => 1,
    ]
];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 1</title>
</head>
<body>
    <div>
        <ul>
            <?php for($i = 0; $i < count($partite); $i++) { ?>
                <?php $this_risultato = $partite[$i]; ?>
                
                <li>
                    <?php echo $this_risultato['casa'] ?> - <?php echo $this_risultato['trasferta'] ?> | <?php echo $this_risultato['puntiCasa'] ?>-<?php echo $this_risultato['puntiTrasf'] ?> 
                </li>

            <?php } ?>
        </ul>
    </div>
</body>
</html>