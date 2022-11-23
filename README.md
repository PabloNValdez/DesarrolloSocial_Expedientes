# Sistema de Expedientes - Tribunal de Cuentas

## Despliegue en entorno local.

### Preparacion

Tener instalado:
PHP 8.0 y MySQL que viene instalando [Xampp](https://www.apachefriends.org/es/download.html)<br>
[Composer](https://getcomposer.org/download/)<br>
[Node JS](https://nodejs.org/es/) <br>
[Vue CLI](https://cli.vuejs.org/guide/installation.html) <br>
Para instalar Vue CLI de forma global
```
npm install -g @vue/cli
```

## Inicialización

### *Backend*
Crear la base de datos con el mismo nombre que el indicado en el .env.
```
cd backend
composer install
php artisan key:generate
php artisan storage:link
php artisan migrate:fresh --seed
```

### *Frontend*
```
cd frontend
npm install
```


## Deploy

### *Frontend*
Para levantar el servidor en http://localhost:8080
```
npm run serve
```

### *Backend*
Para levantar el servidor en http://localhost:8000
```
php artisan serve
```



# DesarrolloSocial_Expedientes
