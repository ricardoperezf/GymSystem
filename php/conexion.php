<?php
        $mysqli = new mysqli("sql10.freemysqlhosting.net", "sql10209158", "Yt5kKkrRBk", "sql10209158");
        if($mysqli->connect_errno):
            echo "Error al conectarse con MySQL debido al error " .$mysqli->connect_error;
        endif;
?>
