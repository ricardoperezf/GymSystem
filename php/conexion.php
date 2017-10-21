    <?php
        $mysqli = new mysqli("sql9.freemysqlhosting.net", "sql9200504", "DrJNGNuW6E", "sql9200504");

        if($mysqli->connect_errno):
            echo "Error al conectarse con MySQL debido al error " .$mysqli->connect_error;
        endif;
    ?>
