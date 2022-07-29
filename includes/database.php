<?php

$db = mysqli_connect(
    $_ENV['DB_HOST'],
    $_ENV['DB_USER'],
    $_ENV['DB_PASS'] ?? '',
    $_ENV['DB_DB']
    );

//debuguear($_ENV); //Podemos ver las variables del .env, una vez hemos hecho las funciones del app.php

if (!$db) {
    echo "Error: No se pudo conectar a MySQL.";
    echo "errno de depuración: " . mysqli_connect_errno();
    echo "error de depuración: " . mysqli_connect_error();
    exit;
}
