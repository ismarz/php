<?php
// e15-bienvenida.php
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Bienvenida</title>
  <script>
    function validarFormulario() {
      const nombre = document.getElementById("nombre").value;
      const mensaje = document.getElementById("mensaje");
      
      if (nombre.length === 0) {
        mensaje.textContent = "El nombre no puede estar vacío.";
        return false;
      }
      if (nombre.length > 10) {
        mensaje.textContent = "El nombre no puede tener más de 10 caracteres.";
        return false;
      }
      
      // todo correcto
      mensaje.textContent = "";
      return true;
    }
  </script>
</head>
<body>
  <h1>Bienvenido</h1>
  <form action="acceso.php" method="get" onsubmit="return validarFormulario();">
    <label for="nombre">Nombre:</label>
    <input
      type="text"
      id="nombre"
      name="nombre"
      maxlength="10"
      placeholder="Tu nombre (máx. 10)"
    >
    <span id="mensaje" style="color: red; margin-left: 0.5em;"></span>
    <br><br>
    <button type="submit">Enviar</button>
  </form>
</body>
</html>
