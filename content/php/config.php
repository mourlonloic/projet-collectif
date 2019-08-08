<?php
$db_host = "127.0.0.1"; // Adresse du serveur de base de données
$db_port = "3306"; // Port du serveur de base de données
$db_user = "root"; // Nom d'utilisateur de la base de données
$db_pass = ""; // Mot de passe de l'utilisateur de la base de données
$db_schema = "projet_collectif"; // Nom de la base de données

// -- Création de la connexion à la base de données
$db_connect = new mysqli($db_host, $db_user, $db_pass, $db_schema);

// On test la connexion
if ($db_connect->connect_error) {
    die("Erreur de connexion : ". $db_connect->connect_error);
}