# INSTRUCCIONES: Cómo agregar las imágenes de Instagram

## 📸 Imágenes necesarias para la sección de Instagram

Para que la sección de Instagram funcione correctamente, necesitas descargar y agregar las siguientes imágenes en la carpeta `public/front/images/instagram/`:

### 1. Foto de perfil
- **Archivo**: `profile.jpg`
- **Fuente**: https://www.instagram.com/latinoknow/
- **Tamaño recomendado**: 150x150px (circular)
- **Cómo obtenerla**:
  1. Ve al perfil de Instagram
  2. Haz clic derecho en la foto de perfil
  3. Selecciona "Guardar imagen como..."
  4. Renómbrala como `profile.jpg`

### 2. Posts recientes (6 imágenes)
Necesitas los 6 posts más recientes del feed:

- **Archivo**: `post1.jpg` (post más reciente)
- **Archivo**: `post2.jpg`
- **Archivo**: `post3.jpg`
- **Archivo**: `post4.jpg`
- **Archivo**: `post5.jpg`
- **Archivo**: `post6.jpg` (sexto post más reciente)

**Tamaño recomendado**: 400x400px (cuadradas)

**Cómo obtener los posts**:
1. Ve al perfil de Instagram: https://www.instagram.com/latinoknow/
2. Para cada post, haz clic derecho en la imagen
3. Selecciona "Guardar imagen como..."
4. Renómbralas como `post1.jpg`, `post2.jpg`, etc.

### 3. Estructura de carpetas
```
public/
└── front/
    └── images/
        └── instagram/
            ├── profile.jpg
            ├── post1.jpg
            ├── post2.jpg
            ├── post3.jpg
            ├── post4.jpg
            ├── post5.jpg
            └── post6.jpg
```

### 4. Posts actuales en @latinoknow (para referencia)
Basándome en la información disponible, estos son algunos de los posts recientes:

1. **Post sobre reducir deuda con IRS** - "¿Sabías que...? 🤔 ¡Esta es la solución para que reduzcas la deuda de tus impuestos este año!"
2. **Tax Day 15 April** - "📢 ¡Atención! La temporada de impuestos está por terminar! ⏳💰"
3. **Extension Application** - "📢 ¡Atención empresarios y contribuyentes! Es tiempo de aplicar extensión."
4. **Welcome Hermaoniee** - "✨ ¡Bienvenida, Hermaoniee, al equipo de Latino Knowledge! ✨"
5. **We're back 2025** - "¡Estamos de vuelta y más emocionados que nunca! ⭐"
6. **We're back English** - "We're back and more excited than ever! ⭐"

### 5. Alternativa rápida
Si necesitas que la sección funcione inmediatamente, puedes usar imágenes temporales:
- Busca imágenes similares en Google Images
- Usa las dimensiones recomendadas
- Reemplázalas más tarde con las imágenes reales

### 6. Actualizar estadísticas
Una vez que tengas acceso al perfil, actualiza las estadísticas en el archivo `instagram.php`:
```php
<div class="stat-value">XXX</div> <!-- Número real de posts -->
<div class="stat-value">XXX</div> <!-- Número real de followers -->
<div class="stat-value">XXX</div> <!-- Número real de following -->
```

---

**Nota**: Una vez que agregues las imágenes, la sección de Instagram se verá exactamente como el feed real de @latinoknow.
