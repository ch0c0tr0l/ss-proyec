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

La vista de inicio carga Bootstrap 5.3.3 desde jsDelivr y los estilos locales desde `public/assets/css/style.css`. El formulario de contacto envía mensajes por SMTP mediante PHPMailer.
En producción, `public/` es la raíz web lógica. El `.htaccess` de este repositorio dirige las solicitudes hacia esa carpeta y niega acceso directo a `app/`, `vendor/` y archivos ocultos.

## Ejecutar localmente

Requiere PHP 8 o posterior con OpenSSL habilitado, Composer y conexion a internet para cargar Bootstrap desde el CDN y enviar correo por SMTP.

Desde la carpeta del proyecto, instala las dependencias y crea tu archivo privado de configuración:

```powershell
composer install
Copy-Item .env.example .env
notepad .env
```

Completa `SMTP_PASSWORD` con la contraseña del buzón SMTP, guarda el archivo y luego inicia el servidor:

```powershell
php -S localhost:8000 -t public
```

Abre [http://localhost:8000](http://localhost:8000) en el navegador.

El endpoint carga `.env` desde la raíz del proyecto. Las variables de entorno ya definidas en el servidor tienen prioridad sobre los valores del archivo. El `.env` está excluido de Git; nunca subas contraseñas al repositorio. El formulario envía los mensajes a `contacto@ss-proyec.com` y usa el correo del visitante como dirección de respuesta.

En el hosting, copia `.env.example` a `.env` en la raíz del proyecto, completa las credenciales SMTP y restringe sus permisos. Confirma en el panel de correo que SMTP esté habilitado para el buzón.

## Desplegar la rama main en Hostinger

1. En hPanel, abre **Sitios web → Administrar → Git** y agrega `https://github.com/ch0c0tr0l/ss-proyec.git`.
2. Selecciona la rama `main`, activa el despliegue automático y usa la raíz de `public_html` como directorio de instalación. No selecciones `public/`: el repositorio completo debe quedar en `public_html`, con `.htaccess`, `app/` y `public/` al mismo nivel.
3. Ejecuta el primer despliegue. La configuración `.htaccess` sirve la página desde `public/` y conserva `app/` fuera de las rutas públicas. Requiere que Apache permita `mod_rewrite` y las directivas de `.htaccess`.
4. Instala las dependencias del formulario por SSH desde la raíz del repositorio en Hostinger:

   ```bash
   composer install --no-dev --optimize-autoloader
   ```

   `vendor/` está excluido de Git y debe permanecer en la raíz, junto a `app/` y `public/`. Si un despliegue posterior elimina `vendor/`, repite el comando.
5. Crea el archivo `.env` desde la plantilla y restringe sus permisos:

   ```bash
   cp .env.example .env
   chmod 600 .env
   nano .env
   ```

   Completa los valores SMTP en el editor y guarda el archivo. `.env` permanece fuera del control de versiones y el `.htaccess` deniega el acceso web a archivos ocultos. No incluyas contraseñas en Git.

Cada `push` a `main` actualizará el sitio si la integración Git de hPanel tiene activado el despliegue automático.
