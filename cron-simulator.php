<?php

while (true) {
    echo "[" . date('Y-m-d H:i:s') . "] Ejecutando tareas programadas...\n";
    exec('php artisan schedule:run');

    // Espera 10 minutos (600 segundos)
    sleep(600);
}
