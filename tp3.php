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
echo $_SERVER['SERVER_ADDR'].' <br>';// l'adresse Ip de serveur
echo $_SERVER['SERVER_NAME'].' <br>';//le nom de serveur
echo $_SERVER['SERVER_PROTOCOL'].' <br>';//le protocole utilisé + version
echo $_SERVER['REQUEST_METHOD'].' <br>';//la methode de la requete
echo $_SERVER['SERVER_PORT'].' <br>';//port de serveur
echo $_SERVER['SCRIPT_NAME'].' <br>';//le chemin de fichier a partir de htdocs
echo"<pre>";
print_r($_SERVER);
echo"</pre>";
echo"<br><b>Exercice2:</b><br>";
$personnes=['loubna'=>159,'doha'=>163,'rajaa'=>173,'hayat'=>164,'imane'=>166];
foreach ($personnes as $cle=>$var){
    echo $cle.' mesure '.$var.' cm <br>';
}
function minimum($tab,$retourne_cle=false){
    $val=array_values($tab);
    $cle=array_keys($tab);
    $min=$val[0];
    $key=$cle[0];
    for($i=1;$i<count($val);$i++){
        if($val[$i]<$min){
            $min=$val[$i];
            $key=$cle[$i];
        }
    }
    if($retourne_cle==true){
        return $key;
    }
    else{return $min;}
}

echo'la plus petite valeur du tableau est '.minimum($personnes);
//4. Ajouter un paramètre optionnel booléen $retourne_cle à la fonction minimum, qui prend par défaut la valeur false. ';
//S'il est mis à true, on renvoie la clef correspondant à la plus petite valeur (et non la valeur elle-même) ";
//Tester sur votre tableau $personnes: cela doit renvoyer le nom du personne le plus petit.';

echo'<br>la cle de la plus petite valeur du tableau est '.minimum($personnes,true);

/*5. Écrire une fonction « min_et_max() » qui renvoie cette fois un tableau de taille 2,
contenant la valeur la plus petite et la valeur la plus grande du tableau donné en
paramètre. Tester sur $personnes*/
function maximum($tab){

    $val=array_values($tab);
    $max=$val[0];
    for($i=1;$i<count($val);$i++){
        if($val[$i]>$max){
            $max=$val[$i];
        }
    }
    return $max;
}
function min_et_max($tab){
    return $tableau=['Min'=>minimum($tab),'Max'=>maximum($tab)];

}
$tab=min_et_max($personnes);
echo '<br> le maximum est : '.$tab['Max']." le minimum est: ".$tab['Min'];
echo'<br><b>Exercice 3:</b><br>';
function afficher($tab){
    //easy way
    echo'<pre>';
    print_r($tab);
    echo'</pre>';
   //or
    foreach ($tab as $var){
        echo $var.'<br>';
    }
}
function moyenne($tab){
    $var=array_values($tab);
    $somme=0;
    for($i=0;$i<count($var);$i++){
        $somme+=$var[$i];
    }
    return $somme/count($var);
}
//test:
echo 'la moyenne est '.moyenne($personnes);
function sup_a_10($tab){
    $cpt=0;
    $var=array_values($tab);
    for($i=0;$i<count($var);$i++){
        if($var[$i]>=10){$cpt++;}
    }
    return $cpt;
}
//test:
echo'<br> Nombre des elements sup ou egaux a 10 est '.sup_a_10($personnes);
function exist($tab,$val){
    $var=array_values($tab);
    for($i=0;$i<count($var);$i++){
        if($var[$i]==$val){
            return true;
        }

    }return false;
}
//test:
if(exist($personnes,44)){
    echo '<br> Exist';
}else{
    echo'<br>Doesnt exist';
}
function meilleur($tab){
    $var=array_values($tab);
    $best=$var[0];
    for($i=0;$i<count($var);$i++){
        if($var[$i]>$best){
            $best=$var[$i];
        }
    }
    return $best;
}
//test:
echo'<br>la meilleur note est obtenu est '.meilleur($personnes);

echo'<br><b>Exercice 4:</b>';
$personnel[0] = array(
    "fonction"=>"Ingénieur","nom"=>"Hamidi","prenom"=>"Said","age"=>54);
$personnel[1]= array(
    "fonction"=>"Technicien","nom"=>"Alami","prenom"=>"Ahmed","age"=>40);
$personnel[2]= array( "fonction"=>"Chef de projet", "nom"=>"Hassani",
    "prenom"=>"Said","age"=>27);
foreach ($personnel as $tab){
    echo'<br>______<br>';
    foreach ($tab as $cle=>$var){
        echo '<br>'.$cle.' => '.$var;
    }
}
echo'<br><b>Exercice 5:</b>';
$produits=array(
    array("reference"=>'ref001',"designation"=>'hp',"prix_unitaire"=>7500,"quantite"=>13),
    array("reference"=>'ref002',"designation"=>'mac',"prix_unitaire"=>12000,"quantite"=>9),
    array("reference"=>'ref003',"designation"=>'toshiba',"prix_unitaire"=>8500,"quantite"=>12),
    array("reference"=>'ref004',"designation"=>'samsung',"prix_unitaire"=>9000,"quantite"=>8),
);
$taux=array(
        "hp"=>0.8,
    "mac"=>0.9,
    "toshiba"=>0.7,
    "samsung"=>0.6,
);
echo'<table border="black">';
echo'<tr><th>Reference</th><th>designation</th><th>Prix unitaire (DH)</th><th>Quantite</th><th>Montant(DH)</th></tr>';
for($i=0;$i<count($produits);$i++){
    if($produits[$i]["prix_unitaire"]>10){
        foreach($taux as $cle=>$val){
            if($cle==$produits[$i]["designation"]){
                $montant=$val*$produits[$i]["prix_unitaire"];
            }
        }
    }else{
        $montant=$produits[$i]['prix_unitaire'];
    }
    echo'<tr><td>'.$produits[$i]["reference"].'</td><td>'.$produits[$i]["designation"].'</td><td>'.$produits[$i]["prix_unitaire"].'</td><td>'.$produits[$i]["quantite"].'</td><td>'.$montant.'</td></tr>';

}



echo'</table>';

?>
</body>
</html>
