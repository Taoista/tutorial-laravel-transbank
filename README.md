
# 🚀 Tutorial Transbank con Laravel

![Project Banner](https://i.ibb.co/YT7HnN6/tutorial.png)
[![YouTube](https://img.shields.io/badge/YouTube-FF0000?style=flat&logo=youtube&logoColor=white)](https://youtu.be/bHX8ZY-su_I)
[![Manual](https://img.shields.io/badge/Manual-FFA500?style=flat&logo=book&logoColor=white)]([https://www.tu_manual_web.com](https://alberto-olave.cl/tutoriales/2))
## 📖 Descripción 

En este tutorial te enseño cómo integrar Transbank Webpay en Laravel de manera fácil y rápida. A lo largo del video, aprenderás a instalar el SDK de Transbank, configurar tu proyecto Laravel, y crear un flujo completo de pago en tu aplicación web. También te mostraré cómo probar tu integración en el entorno de prueba de Transbank antes de pasarla a producción. ¡Sigue el tutorial y habilita pagos en línea con Webpay en tu sitio Laravel!


## ✨  Pasos 

- 🔥 Creacion del proyecto laravel
- 💡 Instalacion del paquete de transbank
- 🎨 Crear Migraciones

## ✨ Documentación 

- 🔥 https://www.transbankdevelopers.cl/documentacion/como_empezar




## 🛠Instalación

copia el repositorio
```bash
git clone git@github.com:Taoista/tutorial-laravel-transbank.git
```

## 🛠️ Tarjetas de prueba
| Tarjeta        | Numero                 | CVV    | Expiracion  | Result                                                                   |
|------------------|------------------------|--------|------------------|--------------------------------------------------------------------------|
| VISA             | 4051 8856 0044 6623     | 123    | Any              | Aprovado.                                         |
| AMEX             | 3700 0000 0002 032      | 1234   | Any              | Aprovado.                                         |
| MASTERCARD       | 5186 0595 5959 0568     | 123    | Any              | Rechazado.                                         |
| Redcompra        | 4051 8842 3993 7763     | N/A    | N/A              |  Aprovado. |
| Redcompra        | 4511 3466 6003 7060     | N/A    | N/A              | Aprovado. |
| Redcompra        | 5186 0085 4123 3829     | N/A    | N/A              | Rechazado |
| Prepaid VISA     | 4051 8860 0005 6590     | 123    | Any              | Aprovado                                         |
| Prepaid MASTERCARD| 5186 1741 1062 9480     | 123    | Any              | Rechazado.                                         |



#### LUMEN - LARAVEL

Entre  a la carpeta
```bash
cd tutorial-laravel-transbank
```

Instala las dependencias
```bash
composer install
```

Copia el archivo de entorno
```bash
cp .env.example .env
```

Ajusta el archivo env con tu configuracion de servidor local de base de datos
```bash

```
Ejecuta las migraciones
```bash
php artisan migrate
```



Ejecuta el servidor
```bash
php artisan serve
```
#### Comandos
Paquete de transbank
```bash
composer require transbank/transbank-sdk:~2.0
```



## 📬 Mis Redes Sociales


[![GitHub](https://img.shields.io/badge/GitHub-181717?style=flat&logo=github&logoColor=white)](https://github.com/Taoista)
[![LinkedIn](https://img.shields.io/badge/LinkedIn-0077B5?style=flat&logo=linkedin&logoColor=white)](https://www.linkedin.com/in/alberto-olave-carvajal-838482197/)
[![Instagram](https://img.shields.io/badge/Instagram-E1306C?style=flat&logo=instagram&logoColor=white)](https://www.instagram.com/alberto_olave73/)
[![Threads](https://img.shields.io/badge/Threads-000000?style=flat&logo=threads&logoColor=white)](https://www.threads.net/@alberto_olave73?hl=es-la)
[![YouTube](https://img.shields.io/badge/YouTube-FF0000?style=flat&logo=youtube&logoColor=white)](https://www.youtube.com/@devtao3753)
[![Web](https://img.shields.io/badge/Web-0078D4?style=flat&logo=internet-explorer&logoColor=white)](https://alberto-olave.cl)
[![Manual](https://img.shields.io/badge/Manual-FFA500?style=flat&logo=book&logoColor=white)]([https://www.tu_manual_web.com](https://alberto-olave.cl/tutoriales/2))



---

<p align="center">
  ❤️ by  taoista Sigueme :)
</p>

