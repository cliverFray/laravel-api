# Prueba FS - Backend (Laravel 11)

Esta es la API REST para el sistema de gestión de Productos y Categorías.

## Requisitos Previos
- PHP 8.2 o superior
- Composer
- MySQL

## Instalación y Configuración Local

1. Instalar dependencias de PHP:
   ```bash
   composer install
   ```

2. Configurar entorno:
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```
   *Asegúrate de configurar las credenciales de tu base de datos MySQL en el archivo `.env` (`DB_CONNECTION=mysql`, `DB_HOST=127.0.0.1`, `DB_PORT=3306`, `DB_DATABASE=store`, `DB_USERNAME`, `DB_PASSWORD`).*

3. Ejecutar Migraciones y Seeders:
   ```bash
   php artisan migrate:fresh --seed
   ```
   *Esto creará las tablas necesarias (incluyendo el log de auditoría de Spatie y Telescope) e insertará datos iniciales.*

4. Levantar servidor local:
   ```bash
   php artisan serve
   ```
   *La API estará disponible en `http://127.0.0.1:8000`*

## URLs Importantes
- **URL Base de la API**: `http://127.0.0.1:8000/api`
- **Documentación Swagger**: `http://127.0.0.1:8000/api/docs`
- **Observabilidad (Telescope)**: `http://127.0.0.1:8000/telescope`

## Docker (Opcional)
Se incluye un archivo `docker-compose.yml` en este proyecto para levantar PHP, MySQL y Nginx (ver el archivo docker-compose en la raíz del backend).
