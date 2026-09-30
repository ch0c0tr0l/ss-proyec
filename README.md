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

La vista de inicio carga Bootstrap 5.3.3 desde jsDelivr y los estilos locales desde `public/assets/css/style.css`.

## Ejecutar localmente

Requiere PHP 8 o posterior y conexion a internet para cargar Bootstrap desde el CDN.

Desde la carpeta del proyecto, ejecuta:

```powershell
php -S localhost:8000 -t public
```

Abre [http://localhost:8000](http://localhost:8000) en el navegador.
