<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<!-- Prendere un paragrafo abbastanza lungo, contenente diverse frasi. Prendere il paragrafo e suddividerlo in tanti paragrafi. 
Ogni punto un nuovo paragrafo.  -->

    <?php 
    
    $paragraph= 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Repudiandae voluptate voluptas numquam natus sed, quis provident ipsam accusantium nemo. Qui nobis molestiae nemo perspiciatis soluta tenetur corporis incidunt facilis pariatur.
    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Repudiandae voluptate voluptas numquam natus sed, quis provident ipsam accusantium nemo. Qui nobis molestiae nemo perspiciatis soluta tenetur corporis incidunt facilis pariatur.
    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Repudiandae voluptate voluptas numquam natus sed, quis provident ipsam accusantium nemo. Qui nobis molestiae nemo perspiciatis soluta tenetur corporis incidunt facilis pariatur.';


    $paragraphs=explode('.', $paragraph);

for ($i=0; $i < count($paragraphs); $i++){
    echo $paragraphs[$i] . "--------";
}

    

    ?>
</body>
</html>