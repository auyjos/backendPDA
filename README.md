
# BackendPDA

Estos desafíos están pensados para simular un día normal de trabajo en donde el programador debe poder  desarrollar cualquiera de las dos tareas dependiendo cual se le asigne, son escenarios simplificados de  una tarea completa. 

## Requisitos
Tener `PHP` y `Composer` instalado

## Getting Started

### 1. Clonar el Repositorio

```bash
git clone [URL_DEL_REPOSITORIO]
cd [NOMBRE_DEL_PROYECTO
```

### 2.Instalar dependencias
```shell
composer install
```
### 3. Configurar el archivo .env

Asegurarse de que las propiedades en el archivo .env sean las correctas

Configurar la conexión a la base de datos (DB_CONNECTION, DB_HOST, DB_PORT, DB_DATABASE, DB_USERNAME, DB_PASSWORD).


### 4. Ejecutar migraciones y seeders
```shell
php artisan migrate --seed
```
### 5. Inicar el servidor
```shell
php artisan serve
```
### Acceder a la API
La API estará disponible en http://localhost:8000.
#### Colleción Postman
Colleción disponible en raíz como archivo [backendPDA.postman_collection.json](backendPDA.postman_collection.json)