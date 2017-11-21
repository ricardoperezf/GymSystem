<?php
        $mysqli = new mysqli("sql9.freemysqlhosting.net", "sql9206193", "yDz3nenNM4", "sql9206193");
        if($mysqli->connect_errno):
            echo "Error al conectarse con MySQL debido al error " .$mysqli->connect_error;
        endif;
?>
