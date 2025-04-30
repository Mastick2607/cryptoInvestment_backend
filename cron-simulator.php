<?php
require __DIR__ . '/vendor/autoload.php'; // Carga las dependencias, incluido Carbon

use Carbon\Carbon;

while (true) {
    echo "[" . Carbon::now()->format('Y-m-d H:i:s') . "] Ejecutando tareas programadas...\n";
    exec('php artisan schedule:run');

    // Espera 10 minutos (600 segundos)
    sleep(600);
}

