<?php

    include_once("konekcija.php");
    if($conn)
        {
            $query="SELECT * FROM `users`";
            $preparedStatement=$conn->prepare($query);
            $preparedStatement->execute();
            $result= $preparedStatement->fetchAll();
            echo"<table>";
            foreach ($result as $res) {
                echo "<tr><td>".$res['username']."</td><td>".$res['email']."</td><td></td></tr>";
            }
            echo"</table></br>
                <a href='logout.php'>Logout</a>
            ";
        }

?>