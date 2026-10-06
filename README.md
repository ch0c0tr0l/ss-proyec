# ss-proyec
Pagina para ss-proyec

## Estructura MVC

```text
app/
	controllers/       Controladores de la aplicacion
	models/            Acceso y logica de datos
	views/             Plantillas HTML
public/
	assets/
		css/style.css    Estilos propios
		js/app.js        JavaScript propio
	index.php          Punto de entrada y controlador frontal
```

<<<<<<< HEAD
La vista de inicio carga Bootstrap 5.3.3 desde jsDelivr y los estilos locales desde `public/assets/css/style.css`.
El directorio `public/` contiene los archivos servidos por la web. En Hostinger, el `.htaccess` de la raíz dirige las solicitudes hacia `public/` y bloquea el acceso web a `app/` y `vendor/`.
=======
La vista de inicio carga Bootstrap 5.3.3 desde jsDelivr y los estilos locales desde `public/assets/css/style.css`. El formulario de contacto envía mensajes por SMTP mediante PHPMailer.
>>>>>>> 69960b07339f7b72a0ed45dc54d8933f8b841664

## Ejecutar localmente

Requiere PHP 8 o posterior con OpenSSL habilitado, Composer y conexion a internet para cargar Bootstrap desde el CDN y enviar correo por SMTP.

Desde la carpeta del proyecto, ejecuta:

```powershell
composer install
$env:SMTP_HOST = "smtp.hostinger.com"
$env:SMTP_PORT = "465"
$env:SMTP_ENCRYPTION = "ssl"
$env:SMTP_USERNAME = "contacto@ss-proyec.com"
$env:SMTP_PASSWORD = "<contrasena-del-buzon>"
$env:MAIL_FROM = "contacto@ss-proyec.com"
php -S localhost:8000 -t public
```

Abre [http://localhost:8000](http://localhost:8000) en el navegador.

<<<<<<< HEAD
## Desplegar desde Git en Hostinger

1. En hPanel, abre **Sitios web → Administrar → Git** y agrega `https://github.com/ch0c0tr0l/ss-proyec.git`.
2. Selecciona la rama `main` y activa el despliegue automático.
3. Usa como directorio de instalación la raíz de `public_html` (no una subcarpeta). El repositorio debe quedar allí con `.htaccess`, `app/` y `public/` al mismo nivel.
4. Haz el primer despliegue desde hPanel. Las siguientes publicaciones se harán al subir cambios a `main`.

El `.htaccess` de la raíz sirve `public/index.php` en `/` y reescribe las rutas de recursos a `public/`, así que no es necesario mover el contenido de `public/` a `public_html`. También impide el acceso web directo a `app/`, `vendor/` y archivos ocultos. Requiere que el hosting permita reglas `mod_rewrite` en `.htaccess`.

El directorio `vendor/` se excluye de Git. Este proyecto no requiere Composer para la página actual. Si se agregan dependencias de Composer, habrá que ejecutar `composer install --no-dev --optimize-autoloader` por SSH después del despliegue, desde la raíz del repositorio; no subir `vendor/` al repositorio.
=======
Configura `SMTP_PASSWORD` con la contraseña del buzón en la terminal donde inicies PHP; no la agregues al código ni al repositorio. El formulario envía los mensajes a `contacto@ss-proyec.com` y usa el correo del visitante como dirección de respuesta.

En el hosting, define esas mismas variables de entorno para PHP y confirma en el panel de correo que SMTP esté habilitado para el buzón.
>>>>>>> 69960b07339f7b72a0ed45dc54d8933f8b841664
