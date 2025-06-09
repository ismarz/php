```markdown
# e15 – Formulario de Bienvenida en PHP

Este pequeño ejemplo demuestra cómo crear un formulario web en PHP con validación en JavaScript y una página de acceso que saluda al usuario por su nombre.

---

## 📂 Estructura de ficheros

- **e15-bienvenida.php**  
  Genera el formulario HTML que solicita el nombre del usuario y valida su longitud (máximo 10 caracteres).

- **e15-acceso.php**  
  Recibe el parámetro `nombre` vía **GET**, lo escapa para evitar XSS y muestra un saludo personalizado:  
```

Hola: <nombre>

```

---

## 🚀 Cómo usarlo

1. Clona (o descarga) este repositorio en tu servidor local (por ejemplo, dentro de `htdocs` o `www`).  
2. Accede al formulario en tu navegador:
```

[http://localhost/ejemplosPHP/e15-bienvenida.php](http://localhost/ejemplosPHP/e15-bienvenida.php)

````
3. Rellena el campo **Nombre** (máximo 10 caracteres).  
- Si el campo está vacío o supera 10 caracteres, verás un mensaje de advertencia junto al campo.  
- Si el valor es válido, al hacer clic en **Enviar** se hará una petición a:
  ```
  http://localhost/ejemplosPHP/e15-acceso.php?nombre=TU_NOMBRE
  ```
4. Verás la página de saludo:
````

Hola: TU\_NOMBRE

```

---

## 📝 Detalles de implementación

### e15-bienvenida.php

- **HTML5 + JavaScript**  
- `<input maxlength="10">` para limitar en el lado del cliente.  
- Función `validarFormulario()` que comprueba:
 1. Que el valor no esté vacío.  
 2. Que no exceda los 10 caracteres.  
- Mensajes de error mostrados en un `<span>` junto al campo.

### e15-acceso.php

- Recoge `$_GET['nombre']` y lo pasa por `htmlspecialchars()` para escapar caracteres especiales.  
- Si no recibe un nombre válido, redirige de vuelta a `e15-bienvenida.php`.

---

## 💡 Buenas prácticas

- **Validación doble**: aunque validamos en el cliente, siempre debes validar también en el servidor.  
- **Seguridad**: utiliza `htmlspecialchars()` para evitar inyecciones de código (XSS).  
- **UX**: informa con mensajes claros de por qué el formulario no se envía.  

---

## 📄 Licencia

Este ejemplo está bajo [MIT License](LICENSE). ¡Siéntete libre de adaptarlo a tus proyectos!
```
