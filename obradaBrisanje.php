<?php
if (isset($_GET['akcija']) && $_GET['akcija'] == "obrisi") {
    include_once("konekcija.php");
    if ($conn) {
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
        
        $query = "DELETE FROM `users` WHERE id=:id";
        $preparedStatement = $conn->prepare($query);
        $preparedStatement->bindValue(":id",$id);
        $preparedStatement->execute();
        header("Location: index.php");
    }
    else{
        echo "nije prosledjen id";
    }
    }
    else {
        echo "Nema konekcije";
    }
}
