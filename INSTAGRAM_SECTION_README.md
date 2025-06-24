# Sección de Instagram - Latino Knowledge

## Descripción
Esta sección muestra el perfil de Instagram de @latinoknow con un diseño moderno que imita el feed oficial de Instagram. Incluye información del perfil, estadísticas y una grilla de posts recientes.

## Características
- **Diseño responsivo**: Se adapta perfectamente a dispositivos móviles y de escritorio
- **Estilo auténtico**: Replica el diseño y comportamiento del feed de Instagram
- **Enlaces funcionales**: Todos los enlaces llevan al perfil real de Instagram
- **Efectos de hover**: Interacciones suaves y modernas
- **Estadísticas en tiempo real**: Fácilmente actualizables

## Archivos incluidos
1. `app/Views/front/pages/instagram/instagram.php` - Archivo principal de la sección
2. `public/front/css/style.css` - Estilos CSS agregados al final del archivo
3. `app/Views/front/example_with_instagram.php` - Ejemplo de integración

## Estructura de la sección

### 1. Header del perfil
- **Foto de perfil**: Imagen circular con efecto hover
- **Información del usuario**: Nombre, username y biografía
- **Estadísticas**: Posts, Followers, Following
- **Botón Follow**: Enlace directo a Instagram

### 2. Grid de posts
- **6 posts recientes**: Con overlay de información
- **Estadísticas de posts**: Likes y comentarios
- **Texto descriptivo**: Extracto de cada post
- **Enlaces directos**: A cada post específico en Instagram

### 3. Botón "Ver más"
- Enlace al perfil completo de Instagram

## Integración en tu sitio

### Opción 1: Incluir en una página existente
```php
<?php include(APPPATH . 'Views/front/pages/instagram/instagram.php'); ?>
```

### Opción 2: Crear un controlador específico
```php
class Instagram extends BaseController
{
    public function index()
    {
        return view('front/pages/instagram/instagram');
    }
}
```

### Opción 3: Incluir en la página principal
Agregar la línea de inclusión en tu archivo `home.php` o similar:
```php
// Después de otras secciones
<?php include(APPPATH . 'Views/front/pages/instagram/instagram.php'); ?>
```

## Personalización

### Actualizar estadísticas
Edita los valores en `instagram.php`:
```php
<div class="stat-value">285</div> <!-- Número de posts -->
<div class="stat-value">1,247</div> <!-- Número de seguidores -->
<div class="stat-value">156</div> <!-- Número de seguidos -->
```

### Cambiar posts
Actualiza los enlaces y contenido en cada post:
```php
<a href="https://www.instagram.com/p/TU_POST_ID" target="_blank">
    <img src="<?= base_url('public/front/images/instagram/post1.jpg') ?>" alt="Descripción">
    <div class="post-text">Tu texto aquí</div>
</a>
```

### Modificar biografía
Edita el contenido en la sección de biografía:
```php
<div class="instagram-bio">
    <p>Tu biografía personalizada aquí 💰📊<br>
    Segunda línea de biografía ✨</p>
</div>
```

## Imágenes requeridas
Coloca las siguientes imágenes en `public/front/images/instagram/`:
- `profile.jpg` - Foto de perfil (recomendado: 150x150px)
- `post1.jpg` - Post 1 (recomendado: 400x400px)
- `post2.jpg` - Post 2 (recomendado: 400x400px)
- `post3.jpg` - Post 3 (recomendado: 400x400px)
- `post4.jpg` - Post 4 (recomendado: 400x400px)
- `post5.jpg` - Post 5 (recomendado: 400x400px)
- `post6.jpg` - Post 6 (recomendado: 400x400px)

## Características responsivas
- **Desktop**: Grid de 3 columnas con espaciado completo
- **Tablet**: Grid de 2 columnas con diseño compacto
- **Mobile**: Grid de 3 columnas apretadas, header apilado

## SEO y Accesibilidad
- Atributos `alt` en todas las imágenes
- Enlaces con `rel="noopener noreferrer"` para seguridad
- Estructura semántica correcta
- Texto descriptivo para lectores de pantalla

## Compatibilidad
- ✅ Chrome/Edge/Safari (moderno)
- ✅ Firefox
- ✅ Dispositivos móviles iOS/Android
- ✅ Tablets

## Mantenimiento
- Actualiza las estadísticas mensualmente
- Cambia los posts según el contenido más reciente
- Verifica que los enlaces sigan funcionando

---

**Nota**: Esta sección está diseñada para ser completamente funcional con el contenido actual. Solo necesitas agregar las imágenes reales en la carpeta correspondiente.
