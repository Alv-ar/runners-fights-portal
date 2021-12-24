# About Us

Somos un grupo de DAW2 que tiene el objetivo de crear una pagina web para respaldar el videojuego que haremos con Unity llamado Runners Fights


# Packages:

Hemos utilizado Stisla para el frontend scaffolding, Spatie para roles y permisos de usuarios y laravel collective para los formularios html

## Antes de nada:

composer update

composer dump-autoload

cp .env.example .env

crear BBDD en mysql llamada portal_db

php artisan migrate

php artisan db:seed --class=SeederTablePermissions

php artisan db:seed --class=AdminUserSeeder

php artisan key:generate