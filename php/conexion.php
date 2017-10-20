<?php
    $mysqli = new mysqli("sql9.freemysqlhosting.net", "sql9198576","vDlGqPkjtk", "sql9198576");
    
    if($mysqli->connect_errno):
        echo "Error al conectarse con MySQL debido al error " .$mysqli->connect_error;
    endif;
?>