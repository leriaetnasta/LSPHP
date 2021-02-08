<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    $pdo= new pdo("mysql:host=localhost;dbname=mabase","root","");
    $stm= $pdo->prepare("insert into personne(nom,prenom,age) 
    values(:nom,:prenom,:age)");
    $stm->execute([":nom"=>"talha",":prenom"=>"hamza",":age"=>21]);
    
    ?>
</body>
</html>