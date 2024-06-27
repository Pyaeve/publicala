
# Publicala 
WebApp para Publicar o compartir tus ideas
## Entorno de Desarrollo
- OS (Windows 11)
- WebServer (Apache 2.4)
- Languaje (Php 7.4.33)
- Framework (Laravel 8, NodeJs, Bootstrap 5)
- Database (Sqlite 3)
- IDE (VSCode)
  
## Procedimientos para instalar
### 1. Clonar Repo de Github
git clone https://github.com/Pyaeve/publicala.git

### 2. Acceder a la Carpeta del Proyecto
cd publicala
### 3. Instalar dependencias de Laravel
composer install
### 4. Publicar Assets
php artisan vendor:publish --tag=laravel-assets --ansi --force
### 5. Instalar dependencias de nodejs
npm install
### 6. Correr node
npm run dev
### 7. Migrar la base de datos(sqlite)
php artisan migrate
### 8. Abrir url en Browser
[http://localhost/publicala](http://localhost/publicala)
