<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

# Raspberry Garden
Raspberry Garden es un proyecto destinado a crear una aplicación que monitorea la humedad del suelo de las plantas utilizando sensores ambientales de Raspberry Pi. La aplicación notifica a los usuarios cuando sus plantas necesitan riego, proporcionando una solución conveniente para el cuidado de las plantas.

## Características
- Registro y autenticación de usuarios: Los usuarios pueden crear cuentas e iniciar sesión en la aplicación.
- Monitoreo de humedad del suelo: La aplicación lee y procesa datos de sensores de humedad del suelo conectados a una Raspberry Pi.
- Umbrales de humedad personalizables: Los usuarios pueden establecer umbrales de humedad para determinar cuándo regar sus plantas.
- Mensajes: La aplicación muestra mensajes a los usuarios cuando la humedad del suelo cae o es superior por debajo del umbral establecido.
- Registro de datos: La aplicación registra las mediciones de humedad del suelo para futuras referencias.
- Compatibilidad con diferentes plantas: La aplicación admite diferentes tipos de plantas, lo que permite a los usuarios monitorear diversas especies.
- Acceso remoto: La aplicación se conecta a una red Wi-Fi, lo que permite el acceso y la gestión remota.
- Soporte para múltiples usuarios y dispositivos: La aplicación puede enviar notificaciones a varios usuarios y dispositivos.

## Tecnologías utilizadas
- Raspberry Pi: El dispositivo central que ejecuta la aplicación y se comunica con los sensores.
- Sensor de humedad del suelo: Conectado a la Raspberry Pi mediante pines GPIO para medir los niveles de humedad del suelo.
- PHP: El lenguaje de programación principal utilizado para desarrollar la aplicación web.
- Laravel: Un framework de PHP que proporciona funciones avanzadas para el desarrollo rápido de aplicaciones.
- Bootstrap 5: Un framework de front-end utilizado para diseñar la interfaz de usuario de la aplicación.
- MySQL: Un sistema de gestión de bases de datos relacional de código abierto para almacenar y gestionar datos.

## Instalación
Para instalar y configurar la aplicación Raspberry Garden, sigue los siguientes pasos:

### Instala proyecto en tu Raspberry Pi.
- Clona el repositorio de Raspberry Garden en tu máquina local.
- Configura la conexión a la base de datos en la aplicación.
- Instala las dependencias necesarias utilizando Composer.
- Ejecuta las migraciones de la base de datos para crear las tablas requeridas.
- Inicia el servidor de desarrollo de Laravel.
- Para obtener instrucciones detalladas de instalación, consulta el documento Manual Técnico de Instalación.

### Uso
La aplicación Raspberry Garden proporciona una interfaz de usuario intuitiva para monitorear los niveles de humedad de las plantas. Los usuarios pueden registrarse, iniciar sesión, agregar plantas a su lista y ver los niveles de humedad de sus plantas. La aplicación muestra mensajes cuando sea necesario regar las plantas según los umbrales establecidos.

Para obtener más información sobre cómo utilizar la aplicación, consulta el documento Manual de Usuario.

## Mejoras futuras
Si bien la versión actual de Raspberry Garden ofrece funcionalidades esenciales para el cuidado de las plantas, existen varias áreas para posibles mejoras:
- Integración con datos meteorológicos: Mejorar la aplicación incorporando datos meteorológicos para determinar horarios óptimos de riego basados en las condiciones locales.
- Control inteligente de riego: Implementar un control inteligente de riego utilizando algoritmos de inteligencia artificial para optimizar el uso del agua y la salud de las plantas.
- Visualización de datos: Desarrollar representaciones gráficas de los niveles de humedad del suelo a lo largo del tiempo para un mejor análisis y toma de decisiones.
- Aplicación móvil: Ampliar la funcionalidad de la aplicación mediante el desarrollo de una aplicación móvil para un acceso y control convenientes desde cualquier lugar.

## Contribuidores
Raspberry Garden es un proyecto desarrollado por Daniel Benítez.

## Licencia
Este proyecto está licenciado bajo la Licencia Creative Commons.
