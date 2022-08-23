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
        'teamHome' => 'Milan',
        'teamAway' => 'Inter',
        'resultHome' => '87',
        'resultAway' => '86',
    ];
    
    echo $tappa1['teamHome'] . " - " . $tappa1['teamAway'] . " | " . $tappa1['resultHome'] . " - " . $tappa1['resultAway'];
    
    
    ?>
</body>
</html>