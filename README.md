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


15. Ejecutar el siguiente INSERT en la db 

INSERT INTO `categorias` (`id`, `nombre`, `descripcion`, `created_at`, `updated_at`) VALUES (1, 'LACTEOS', 'DESCRIPCION', '2022-05-17 15:36:57', '2022-05-17 15:36:58');
INSERT INTO `categorias` (`id`, `nombre`, `descripcion`, `created_at`, `updated_at`) VALUES (2, 'CREPAS', 'DESCRIPCION', '2022-05-17 16:51:13', '2022-05-17 16:51:14');
INSERT INTO `categorias` (`id`, `nombre`, `descripcion`, `created_at`, `updated_at`) VALUES (3, 'PIZZA', 'DESCRIPCION', '2022-05-17 16:51:15', '2022-05-17 16:51:16');
INSERT INTO `categorias` (`id`, `nombre`, `descripcion`, `created_at`, `updated_at`) VALUES (4, 'SÁNDWICHES Y CHAPATAS', 'DESCRIPCION', '2022-05-17 16:51:29', '2022-05-17 16:51:30');
INSERT INTO `categorias` (`id`, `nombre`, `descripcion`, `created_at`, `updated_at`) VALUES (5, 'COFFEE PASTRIES', 'DESCRIPCION', '2022-05-17 16:51:39', '2022-05-17 16:51:40');
INSERT INTO `categorias` (`id`, `nombre`, `descripcion`, `created_at`, `updated_at`) VALUES (6, 'DONAS', 'DESCRIPCION', '2022-05-17 16:51:56', '2022-05-17 16:51:56');
INSERT INTO `categorias` (`id`, `nombre`, `descripcion`, `created_at`, `updated_at`) VALUES (7, 'BEBIDAS CALIENTES', 'DESCRIPCION', '2022-05-17 16:52:32', '2022-05-17 16:52:35');
INSERT INTO `categorias` (`id`, `nombre`, `descripcion`, `created_at`, `updated_at`) VALUES (8, 'BEBIDAS FRIAS', 'DESCRIPCION', '2022-05-17 16:52:33', '2022-05-17 16:52:35');




## CONSULTAS ADICIONALES 

## consulta del producto que más stock tiene.
SELECT ID, NOMBRE, REFERENCIA, PRECIO, PESO, STOCK 
FROM productos
WHERE STOCK IN (SELECT MAX(STOCK) FROM productos);

## consulta de ventas que más stock tiene.
SELECT P.ID, P.NOMBRE, P.REFERENCIA, C.NOMBRE AS CATEGORIA, P.PRECIO, P.PESO, P.STOCK, V.cantidad AS CANTIDAD
FROM productos P
INNER JOIN ventas V ON P.ID = V.productos_id
INNER JOIN categorias C ON P.categoria_id = C.ID
WHERE V.cantidad IN (SELECT MAX(cantidad) FROM ventas);

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