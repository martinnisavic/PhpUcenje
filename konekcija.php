<?php
const root = "localhost";
const username = "root";
const pass = "";
const db = "php1_vezba";

try {
  
    $conn = new PDO("mysql:host=" . root . ";dbname=" . db, username, pass);
    
    $conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    
} catch (PDOException $e) {
   
    die("Neuspela konekcija: " . $e->getMessage());
}
?>