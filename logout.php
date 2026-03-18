<?php
session_start();
session_unset();    // Briše sve varijable iz sesije
session_destroy();  // Potpuno uništava sesiju

header("Location: index.php"); // Vraća te na početnu
exit();
?>