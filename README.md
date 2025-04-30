# 📊 Backend - CryptoInvestment API


## 📋 Descripción

Este es el backend del sistema **CryptoInvestment**, desarrollado en **Laravel**. Proporciona una API RESTful que permite consultar y almacenar información de criptomonedas utilizando la API de CoinMarketCap y persistirla en una base de datos MySQL.

## 🚀 Tecnologías Utilizadas
- [Laravel 10](https://laravel.com/) – Framework PHP para desarrollo backend.
- [MySQL](https://www.mysql.com/) – Base de datos relacional.
- [CoinMarketCap API](https://coinmarketcap.com/api/) – Fuente de datos para precios, volumen y variaciones de criptomonedas.

## 🚀 Instalación

1. Clonar el repositorio

```bash
  git clone https://github.com/Mastick2607/cryptoInvestment_backend.git
  cd cryptoInvestment_backend
  code . //para abrir el proyecto
```

2. Instalar composer sino se tiene

- Visita https://getcomposer.org/download/
- Descarga el archivo 'Composer-Setup.exe'
- Sigue las instrucciones del asistente de instalación
- Asegúrate de que la opción "Add to PATH" esté marcada para poder usar composer desde cualquier directorio
- Abre una nueva ventana de CMD o PowerShell y ejecuta:
  
```bash
 composer --version
```

3. Sí ya tienes composer ejecuta esto:
```bash
composer install
```

4. Copia el archivo de configuración y configura las variables de entorno:

- Abre el explorador de archivos en la raíz del proyecto.
- Busca el archivo .env.example.
- Cópialo (Ctrl + C) y pégalo (Ctrl + V).
- Renómbralo a .env.

5.Genera la clave de aplicación:

 ```bash
php artisan key:generate

```
   
6. Editar el archivo .env con las credenciales:


```bash
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=cryptoInvestment_bd
DB_USERNAME=root
DB_PASSWORD=
```
7. Crear la base de datos:
- Crear la base de datos en PhpMyAdmin con el nombre cryptoInvestment_bd

8. Activar servicios del paquete de servidor local:

- Dar "Start" al boton de Mysql
- Dar "Start" al boton de Apache

7. En caso de que apache tenga inconvientes, escribe este comando en consola para que funcionen las peticiones:

```bash
 php artisan serve
```
8. Migrar las tablas
```bash
 php artisan migrate
```
9. Una vez que el servidor esté en funcionamiento, debes abrir una nueva ventana de la terminal y ejecutar el siguiente comando. Este proceso se encargará de almacenar periódicamente el historial de precios en la base de datos:

php cron-simulator.php



El API estará disponible en: http://localhost:8000

# 🔌 Endpoints Principales

## Obtener listado de criptomonedas
*GET*  http://localhost:8000/api/cryptos/

## Obtener detalles de una criptomoneda
*GET*  http://localhost:8000/api/cryptos/{id}

## Obtener historial de precios de cada criptomoneda
## *NOTA* si se va obtener la información desde Postman, debe colocar los siguientes parámetros en la url, para el ejemplo se colocó:
*GET*  http://localhost:8000/api/cryptos/{id}/price-history?from=2025-04-29 12:00:00&to=2025-04-30 10:11:48

