<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    if(isset($_POST['Envoyer'])){
        if(!empty($_POST['nom'])){
        echo 'Votre nom est : <b>'.$_POST['nom'].'</b><br>';
        echo 'Votre prenom est : <b>'.$_POST['prenom'].'</b><br>';
        echo 'Votre email est : <b>'.$_POST['email'].'</b><br>';
        echo 'Votre sexe est : <b>'.$_POST['sexe'].'</b><br>';
        echo 'Votre pays est : ';
        $py=$_POST['pays'];
        foreach ($py as $p){
            echo'<b>'.$p.'</b><br>';
        }
        echo 'Votre language préférés est :';
        $lang=$_POST['langages'];
        foreach ($lang as $l){
            echo '<b>'.$l.'</b><br>';
        }
        $dom=$_POST['domaine'];
        echo'Domaine d\'activité : ';
        foreach ($dom as $d){
            echo'<b>'.$d.'</d><br>';
        }
        }
    }
    ?>
</body>
</html>