<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    
    $tappa1 = [
        [
            'teamHome' => 'Milan',
            'teamAway' => 'Inter',
            'resultHome' => '87',
            'resultAway' => '86',
        ],
        [
            'teamHome' => 'Milan',
            'teamAway' => 'Inter',
            'resultHome' => '87',
            'resultAway' => '86',
        ],
        [
            'teamHome' => 'Milan',
            'teamAway' => 'Inter',
            'resultHome' => '87',
            'resultAway' => '86',
        ]
    ];
    
    for ($i=0;$i < count($tappa1);$i++)
    {
        ?>
        <h4>
            <?php 
            echo $tappa1[$i]['teamHome'] . " - " . $tappa1[$i]['teamAway'] . " | " . $tappa1[$i]['resultHome'] . " - " . $tappa1[$i]['resultAway'];
            ?>

        </h4>
        
    <?php
    }

    
    
    ?>
</body>
</html>