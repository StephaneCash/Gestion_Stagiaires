<?php
try {
    $pdo = new PDO("mysql:host=localhost;dbname=gestion_stage", "root", "02745500Lut", array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
} catch (Exception $e) {
    echo ('Erreur de connexion :' . $e->getMessage());
}