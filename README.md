
# Publicala 
Procedimientos para instalar
# 1 Clonar Repo
git clone https://github.com/Pyaeve/publicala.git
# 2 instalar dependecias
composer install
# 3 Publicar assetes
php artisan vendor:publish --tag=laravel-assets --ansi --force
# 4 instalar dependecias de node
npm install
# 5 Correr node
npm run dev
# 6 Migrar la base de datos(sqlite)
php artisan migrate
# 7 Abrir url
[Link text Here](http://localhost/publicala)
