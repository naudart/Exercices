<?php
    // TABLEAU CONJUGAISON
    include "conjugaison.php";
    
    // ISSET VARIABLES UTILISATEUR
    if(isset($_POST['verbe'],  $_POST['groupe'], $_POST['temps'])){
        $verbe = $_POST['verbe'];
        $groupe = $_POST['groupe'];
        $temps = $_POST['temps'];
    }

    /*echo $verbe." ".$groupe." ".$temps;
    grp1 = 1;
    grp2 = 2;
    grp3 = 3;
    
    $grp = 0;
    $racine = substr($verbe, 0, -2);
    $term = substr($verbe,-2);
    if ($term == 'er'){
        $grp = 1;
    }
    elseif($term == 'ir'){
        $grp = 2;
    }
    elseif($term == 're' or substr($verbe, -3) == 'oir'){
        $grp = 3;
    }
    */
    $racine = substr($verbe, 0, -2);

    echo "$verbe $temps : <br>";
    echo "<br>Je ".$racine.$conjug[$groupe][$temps][0];
    echo "<br>Tu ".$racine.$conjug[$groupe][$temps][1];
    echo "<br>Il ".$racine.$conjug[$groupe][$temps][2];
    echo "<br>Nous ".$racine.$conjug[$groupe][$temps][3];
    echo "<br>Vous ".$racine.$conjug[$groupe][$temps][4];
    echo "<br>Ils ".$racine.$conjug[$groupe][$temps][5];
    
/*
    echo "$verbe $temps : <br>";
    echo "<br>Je ".$racine.$conjug[$grp][$temps][0];
    echo "<br>Tu ".$racine.$conjug[$grp][$temps][1];
    echo "<br>Il ".$racine.$conjug[$grp][$temps][2];
    echo "<br>Nous ".$racine.$conjug[$grp][$temps][3];
    echo "<br>Vous ".$racine.$conjug[$grp][$temps][4];
    echo "<br>Ils ".$racine.$conjug[$grp][$temps][5];
*/
?>