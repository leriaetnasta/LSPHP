<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    if(isset($_POST['operation'])){
        $nb1=$_POST['n1'];
        $nb2=$_POST['n2'];
        $op=$_POST['operation'];
        if($op=="addition"){
            $res=$nb1+$nb2;
        }else if($op=="division"){
            $res=$nb1/$nb2;
        }else if($op=="soustraction"){
            $res=$nb1-$nb2;
        }else if($op=="multiplication"){
            $res=$nb1*$nb2;
        }
    }
    ?>
    <form method="post" action="#">
    Nombre 1: <input type="number" name="n1" value="<?= $nb1 ?>"><br>
    Nombre 2: <input type="number" name="n2" value="<?=$nb2?>"><br>
    Resultat : <input type ="number" disabled value="<?= $res?>"><br>
    <input type="submit" name="operation" value="addition"> 
    <input type="submit" name="operation" value="division"> 
    <input type="submit" name="operation" value="soustraction"> 
    <input type="submit" name="operation" value="multiplication"> 

</body>
</html>