# API de Conversión de Unidades

Esta API proporciona endpoints para convertir diferentes tipos de unidades, como longitud, peso, temperatura, volumen y velocidad.

## Endpoints

- Longitud:
  - `/convert/length/{value}/{unit}`: Convierte entre metros y pies.

- Peso:
  - `/convert/weight/{value}/{unit}`: Convierte entre kilogramos y libras.

- Temperatura:
  - `/convert/temperature/{value}/{unit}`: Convierte entre Celsius y Fahrenheit.

- Volumen:
  - `/convert/volume/{value}/{unit}`: Convierte entre litros y galones americanos.

- Velocidad:
  - `/convert/speed/{value}/{unit}`: Convierte entre kilómetros por hora y millas por hora.

## Uso

Cada endpoint espera recibir un valor numérico y la unidad de origen como parte de la URL. Por ejemplo:

GET /convert/length/10/meters


Esto devolverá la conversión de 10 metros a pies en formato JSON.

## Instalación

1. Clona este repositorio:

git clone https://github.com/tu_usuario/tu_proyecto.git


2. Instala las dependencias de Laravel:

composer install


3. Copia el archivo `.env.example` a `.env` y configura tu base de datos y otras variables de entorno.

4. Genera una nueva clave de aplicación:

php artisan key:generate


5. Ejecuta las migraciones para crear las tablas de la base de datos:

php artisan migrate


6. Inicia el servidor de desarrollo:

php artisan serve


## Contribución

Si encuentras algún error o tienes alguna sugerencia de mejora, no dudes en abrir un issue o enviar un pull request.

## Licencia

Este proyecto está bajo la licencia [MIT License](LICENSE).
