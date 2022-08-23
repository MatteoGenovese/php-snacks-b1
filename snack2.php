<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<!-- Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) 
        che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. 
        Se tutto è ok stampare "Accesso riuscito", altrimenti "Accesso negato" -->

        <!-- http://localhost:8888/46_php-snacks-b1/php-snacks-b1/snack2.php?name=Giovanna&mail=matteo.genovese@icloud.com&age=23 -->

    <?php 
    
    $name= $_GET['name'];
    $mail= $_GET['mail'];
    $age= $_GET['age'];

    if (
    strlen($name) > 3 
    && strpos($mail, '.') > 0
    && strpos($mail, '@') > 3
    && is_numeric($age))
    {
        echo 'accesso riuscito';
    }
    else{
        echo 'accesso negato';
    }
    
    ?>
</body>
</html>