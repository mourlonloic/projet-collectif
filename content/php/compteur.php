<?php 
include_once("pdo.php");

$id = session_id();
if ($_SESSION['id']!=$id) {
    $_SESSION['id']=$id; 
    $sql="UPDATE live_compteur SET compteur = compteur +1;";
    $bdd->query($sql);
}


$sql = 'SELECT compteur FROM live_compteur';
$cpt = $bdd->query($sql)->fetch();
echo "<table bordercolor=red border=1><tr><td>visiteurs = ". $cpt."</td></tr></table><br>";

?>