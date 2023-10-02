# Cuida Tu Comunidad (CTC) - Prototipo

## Descripción
Este proyecto es un prototipo de la plataforma "Cuida Tu Comunidad (CTC)" que permite a los ciudadanos colaborar en tareas comunitarias y otorgar "likes" a las tareas relevantes. El proyecto consta de un frontend desarrollado en React y un backend en Laravel, con una base de datos SQLite (o PostgreSQL) para almacenar las tareas y los "likes".

## Requisitos Previos
Asegúrate de tener instalado Node.js, npm, PHP, Composer y Laravel en tu sistema antes de comenzar.

## Configuración del Backend
1. Navega a la carpeta del backend:
cd backend

2. Instala las dependencias de Laravel:
composer install

3. Copia el archivo de configuración `.env.example` a `.env` y configura la conexión a la base de datos (SQLite o PostgreSQL).

4. Genera una clave de aplicación única:
php artisan key:generate

5. Ejecuta las migraciones para crear las tablas en la base de datos:
php artisan migrate

6. Inicia el servidor backend:
php artisan serve
El servidor backend estará en funcionamiento en http://localhost:8000.

## Configuración del Frontend
1. Navega a la carpeta del frontend:
cd frontend

2. Instala las dependencias de React:
npm install

3. Inicia la aplicación frontend:
npm start

La aplicación frontend estará disponible en http://localhost:3000.

## Uso de la Plataforma
- Al acceder a la aplicación, verás una lista de tareas con títulos, descripciones, fechas de creación, estados de la república, nombres de creadores y números de "likes".
- Puedes crear una nueva tarea haciendo clic en el botón correspondiente.
- Para otorgar "likes" a una tarea, simplemente haz clic en el botón "Like" asociado a esa tarea. El botón se deshabilitará en la vista actual.
- Las tareas pueden ser eliminadas si no tienen "likes" asociados.
- Utiliza la función de búsqueda para encontrar tareas por título o estado.

## Contribución
Si deseas contribuir a este proyecto, sigue las mejores prácticas de desarrollo y crea un pull request con tus cambios. Tu contribución es bienvenida.

## Licencia
Este proyecto se distribuye bajo la [Licencia MIT](LICENSE).
