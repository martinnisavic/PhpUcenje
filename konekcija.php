<?php
const root = "localhost";
const username = "root";
const pass = "";
const db = "php1_vezba";

try {
    // Konstante se spajaju tačkom, ne idu unutar navodnika sa $
    $conn = new PDO("mysql:host=" . root . ";dbname=" . db, username, pass);
    
    $conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    // Ako dođe do ovde, konekcija je uspela
} catch (PDOException $e) {
    // Na kolokvijumu je bolje koristiti try-catch za PDO
    die("Neuspela konekcija: " . $e->getMessage());
}
?>