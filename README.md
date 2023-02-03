
## Instalación

Clonar el repositorio

    git clone https://github.com/1-Aleja/coffee_shop.git
    
Cambiar al directorio del proyecto

    cd coffee_shop
    
Instalar las dependencias usando composer

    composer install

Copiar el archivo env de ejemplo y realice los cambios de configuración necesarios en el archivo .env (definir la conexión a la base de datos)

    cp .env.example .env

Ejecutar migraciones de base de datos

    php artisan migrate

Iniciar el servidor de desarrollo local.

    php artisan serve

Ahora puede acceder al servidor en http://localhost:8000 realizando login con los datos de acceso  por defecto del usuario administrador.

 Ingresar en base de datos el archivo sql adjuntado

