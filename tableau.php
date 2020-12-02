<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
echo'<br><b>Exercice 1:</b><br>';
$personnes = array(
    'mdupond'=> array('prenom' => 'Martin', 'nom' => 'Dupond', 'age' => 25, 'ville' => 'Paris'),
    'jm'=> array('prenom' => 'Jean', 'nom' => 'Martin', 'age' => 20, 'ville' => 'Villetaneuse'),
    'toto'=> array('prenom' => 'Tom', 'nom' => 'Tonge', 'age' => 18, 'ville' => 'Epinay'),
    'arn'=> array('prenom' => 'Arnaud', 'nom' => 'Dupond', 'age' => 33, 'ville' => 'Paris'),
    'email'=> array('prenom'=>'Emilie', 'nom'=>'Ailta', 'age'=>46, 'ville'=>'Villetaneuse'),
    'dask' => array('prenom'=>'Damien', 'nom'=>'Askier','age'=>7,'ville'=>'Villetaneuse')
);
function affichage($mat){
    echo'<table border="black">';
    echo'<tr><th>prenom</th><th>nom</th><th>age</th><th>ville</th></tr>';
    foreach ($mat as $tab){
        echo'<tr>';
        foreach ($tab as $var){
            echo'<td>'.$var.'</td>';
        }
        echo'</tr>';
    }
    echo'</table>';
}
affichage($personnes);
echo'<br><b>Exercice 2:</b><br>';
$clients = array(
    "client 1"=>array("nom 1"=>"Lesfer","ville 1"=>"Casablanca","age 1"=>"35"),
    "client 2"=>array("nom 2"=>"Karimi","ville 2"=>"Rabat","age 2"=>"47"),
    "client 3"=>array("nom 3"=>"Nawi","ville 3"=>"Tours","age 3"=>"58")) ;
function afficher($mat){

    echo'<table border=black>';
    echo'<tr><th>Client</th><th>Nom</th><th>Ville</th><th>Age</th></tr>';
    foreach ($mat as $cle=>$tab){
        echo'<tr><td>'.$cle.'</td>';
        foreach ($tab as $var){
            echo'<td>'.$var.'</td>';
        }
        echo'</tr>';
    }
    echo'</table>';
}
afficher($clients);
echo'<br><b>Question 2:</b><br> ';
echo '<br> Before:'.count($clients);
$clients+=array("client 7"=>array("nom 7"=>"fsdf","ville 7"=>"sdf","age 7"=>"45"));
echo '<br> After :'.count($clients);
echo'<br>';
echo'<pre>';
print_r($clients);
echo'</pre>';
echo'<br><b>Question 3:</b><br>';

function replace_key(&$mat){
    $new=["Nom","Ville","Age"];
    foreach ($mat as $tab){
        $cpt=0;
        foreach ($tab as $cl=>$var){
            $tab[$cl]=$new[$cpt];
            echo $tab[$cl];
            $cpt++;
        }
    }
    return $mat;
}

$clients12= replace_key($clients);
echo'<pre>';
print_r($clients12);
echo'</pre>';


?>

</body>
</html>