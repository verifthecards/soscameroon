<?php
    // Variables

    $servername = "localhost";      // Host
    $username = "root";             // Username
    $password = "";                 // Password of Database
    $dbname = "cidlogis";           // Name of database

    // Creation the connection with Database
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check the stability of connection
    if ($conn->connect_error) {
        die("Erreur survenue lors de la connexion à la base de données: " . $conn->connect_error);
    }
?>