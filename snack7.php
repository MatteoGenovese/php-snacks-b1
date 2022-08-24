<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<!-- Creiamo un array contenente le partite di basket di un'ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema.
    Olimpia Milano - Cantù | 55-60 -->

    <?php 
        $alunni = [
        [
            'nome' => 'luca',
            'cognome' => 'lucherrimo',
            'voti' => [
                [10],
                [9],
                [10],
                [9],
            ],
        ],
        [
            'nome' => 'marco',
            'cognome' => 'marcherrimo',
            'voti' => [
                [9],
                [8],
                [9],
            ],
        ],
        [
            'nome' => 'enzo',
            'cognome' => 'enzerrimo',
            'voti' => [
                [7],
            ],
        ],
    ];
    
    for ($i=0;$i < count($alunni);$i++)
    {
        $media=0;
        for ($j=0 ; $j < count($alunni[$i]['voti']) ; $j++){
            $media += $alunni[$i]['voti'][$j];
        }
        $media = $media / count($alunni[$i]['voti']);
        ?>
        <h4>
            <?php 
            echo $alunni[$i]['nome'] . " " . $alunni[$i]['cognome'] . " | la sua media è: " . $media ;
            ?>

        </h4>
        
    <?php
    }

    
    
    ?>
</body>
</html>