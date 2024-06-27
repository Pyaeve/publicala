
# Publicala 
Procedimientos para instalar
# 1 Clonar Repo
git clone https://github.com/Pyaeve/publicala.git

# 2 Acceder a la Carpeta 
cd publicala
# 3 instalar dependencias
composer install
# 4 Publicar assets
php artisan vendor:publish --tag=laravel-assets --ansi --force
# 5 instalar dependecias de node
npm install
# 6 Correr node
npm run dev
# 7 Migrar la base de datos(sqlite)
php artisan migrate
# 8 Abrir url
[http://localhost/publicala](http://localhost/publicala)
