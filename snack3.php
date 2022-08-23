<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<!-- Creare un array con 15 numeri casuali, tenendo conto che l'array non dovrà contenere lo stesso numero più di una volta  -->

    <?php 
    
    $arrayRandomNumbers= [];

do{
    array_push($arrayRandomNumbers, random_int(0, 15));
    array_unique($arrayRandomNumbers);
}
while(count($arrayRandomNumbers)< 14);

for ($i=0; $i < count($arrayRandomNumbers);$i++){
    echo $arrayRandomNumbers[$i] . " ";
}

    

    ?>
</body>
</html>