<?php
session_start();
$ulogovan = false;
$stranica = '';


if (isset($_SESSION['username'])) {
    $ulogovan = true;
}

if (isset($_GET['stranica'])) {
    $stranica = $_GET['stranica'];
}

if (isset($_SESSION["role"])) {
    $role = $_SESSION["role"];
}

?>

<!DOCTYPE html>
<html lang="sr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP1 Vežba - Home</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <?php if (!$ulogovan): ?>
        <?php
        switch ($stranica) {
            case 'logIn':
                include('./Stranice/logInstrana.php');
                break;
            case 'register':
                include('./Stranice/registerStrana.php');
                break;
            default:
                include('./Stranice/pocetniPrikaz.php');
                break;
        }
        ?>
    <?php else: ?>
        <?php if ($role == 'admin'): ?>
            <?php
            include("adminpanel.php");
            ?>
        <?php else: ?>
            <div>
                <p>Dobrodošli, <strong><?php echo $_SESSION['username']; ?></strong>!</p>
                <a href="logout.php?">Odjavi se</a>
            </div>
        <?php endif; ?>
    <?php endif; ?>
    <script src="main.js"></script>
</body>

</html>