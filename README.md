# Desarrollo Laravel - Grupo Konecta

1. Tener en el sistema operativo composer de manera global
2. Tener instalado GIT
3. Tener instalado node.js
4. Tener instalado composer
5. Contar con un entorno de desarrollo como Xamp, Wamp o Laragon
6. Clonar el repositorio del proyecto en: https://github.com/Yeffer/konecta_laravel.git
7. Instalar dependencias del proyecto
	composer install
8. Generar archivo .env (Compartido en el correo)
9. Crear la siguiente base de datos:
	CREATE DATABASE `konecta_laravel` 
10. Agregar información de variables globales .ENV (Configirar conexión a DB creada)
11. Ejecutar el siguiente comando desde consola en la ubicación del proyecto:
	composer dump-autoload
12. Correr migraciones con el siguiente comando:
	php artisan migrate
13. Inicializar el proyecto con el siguiente comando:
	php artisan serve
14. Ir a la URL proporcionada por el anterior comando ejm: http://127.0.0.1:8000/




## ####################
## ####################
## NOTAS:
## COMANDOS COMPOSER
## 1 composer dumpautoload
## 2 php artisan config:cache
## 3 php artisan migrate

## INSTALLA NODE.js
## Eejutar comando en el proyecto: 
## npm install
## npm run dev
## ####################
## ####################