# Nombre de tu Proyecto

SISTEMA DE CURSOS UNEFA ONLINE

## 🚀 Requisitos Previos

Antes de instalar, asegúrate de tener instalado:
* PHP (versión >= 8.2 o la que use tu proyecto)
* Composer
* Node.js y NPM
* MySQL

## 🛠️ Pasos para la Instalación

Sigue estos pasos para configurar el proyecto de forma local:

### 1. Clonar el repositorio
Abre tu terminal y ejecuta el siguiente comando:
```bash
git clone [https://github.com](https://github.com/asypcmonagascursosc-debug/cursosunefa)
cd TU_REPOSITORIO
```

### 2. Instalar las dependencias de PHP
Descarga todos los paquetes necesarios del framework con Composer:
```bash
composer install
```

### 3. Instalar las dependencias de JavaScript
Instala y compila los assets del frontend:
```bash
npm install
npm run dev
```

### 4. Configurar el archivo de entorno
Copia el archivo de ejemplo para crear tu archivo `.env`:
```bash
cp .env.example .env
```
> **Nota:** Abre el archivo `.env` recién creado en tu editor de texto y configura las credenciales de tu base de datos (`DB_DATABASE`, `DB_USERNAME`, `DB_PASSWORD`).

### 5. Generar la clave de la aplicación
Crea la clave única de encriptación para tu proyecto:
```bash
php artisan key:generate
```

### 6. Ejecutar las migraciones y seeders
Crea las tablas en la base de datos y carga los datos de prueba (si aplica):
```bash
php artisan migrate --seed
```

### 7. Iniciar el servidor local
Levanta el servidor de desarrollo de Laravel:
```bash
php artisan serve
```

Ya puedes acceder a la aplicación desde tu navegador en: **http://127.0.0.1:8000**
  emailadministrador@gmail.com
    password=12345678
