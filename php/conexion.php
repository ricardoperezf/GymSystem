<?php
        $mysqli = new mysqli("sql10.freemysqlhosting.net", "sql10210755", "I7zaxhTmYJ", "sql10210755");
        if($mysqli->connect_errno):
            echo "Error al conectarse con MySQL debido al error " .$mysqli->connect_error;
        endif;
?>
