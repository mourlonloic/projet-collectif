<?php
try
{
    $db = new PDO('mysql:host=localhost;dbname=projet_collectif', "root", "");
}
catch (PDOException $e)
{
    print "Erreur !: " . $e->getMessage() . "<br/>";
    die();
}