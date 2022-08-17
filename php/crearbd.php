<!-- URIEL ANTHONI ILES CALDERON - ADSI SENA-->
<!doctype html>
<html lang="es">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="../css/bootstrap_flaty.css" />

  <title>PC Electronics - Inicio</title>
</head>

<body>
  <center><img src="../imag/Logo PC ELECTRONICS.png" width="215" height="200"></center>
  <p class="text-center">Venta de equipos de computo y Accesorios</p>
  <!-- Menú estilo Bootstrap-->
  <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container-fluid">
      <a class="navbar-brand" href="../Index.html">APPControlCVI</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
              aria-expanded="false">Administrador</a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="../php/crearbd.php">Crear Base de Datos</a></li>
              <li><a class="dropdown-item" href="../php/creartabla.php">Crear Tabla</a></li>
              <li><a class="dropdown-item" href="../php/pdf.php">Generar Reporte PDF</a></li>
              <li><a class="dropdown-item" href="../php/backup.php">Generar Backup</a></li>
            </ul>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
              aria-expanded="false">Inventario</a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="../php/productos.php">Lista productos</a></li>
              <li><a class="dropdown-item" href="../IngresoProducto.html">Ingreso de producto</a></li>
              <li><a class="dropdown-item" href="../ModificarProducto.html">Actualizar producto</a></li>
              <li><a class="dropdown-item" href="../BorrarProducto.html">Eliminar producto</a></li>
              <li><a class="dropdown-item" href="../ConsultarProducto.html">Consultar producto</a></li>
            </ul>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
              aria-expanded="false">
              Utilidades
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="../Calculadora.html">Calculadora</a></li>
              <li><a class="dropdown-item" href="../Conversor.html">Conversor</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- Optional JavaScript; choose one of the two! -->
  <div class="container pt-3">
    <br>
  <?php
    $servername="localhost";
    $username="root";
    $password="12345678";

    //Iniciando la conexion a la Base de Datos
    $conn = mysqli_connect($servername, $username, $password);

    //Verificando la conexion
    if (!$conn) {
        die('<div class="alert alert-dismissible alert-danger">
        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        <strong>Error Autenticacion!</strong> ' . mysqli_connect_error().'</div>');
    }
    echo '<div class="alert alert-dismissible alert-success">
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            <strong>Conexión Exitosa!</strong> La conexion a la base de datos fue correcta.
            </div>';
    //Creando la base de datos
    $sql = "CREATE DATABASE bdunad31";
    if (mysqli_query($conn, $sql)){
        echo '<div class="alert alert-dismissible alert-success">
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            <strong>Creación Exitosa!</strong> Base de datos <strong>bdunadu1</strong> creada con éxito.
            </div>';
    } else{
        echo '<div class="alert alert-dismissible alert-danger">
        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        <strong>Error Creando BD!</strong> ' . mysqli_error($conn). '</div>';
    }
    //Cerrando la conexion
    mysqli_close($conn);
?>
</div>
  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
    crossorigin="anonymous"></script>

  <!-- Option 2: Separate Popper and Bootstrap JS -->
  <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  <!-- Pie de pagina-->
  <br>
  <br>
  <footer class="bg-primary text-center text-white">
    <div class="text-center p-1" style="background-color: rgba(0, 0, 0, 0.2);">
      <h7 style="text-align: center;">PROGRAMACIÓN DE SITIO WEB - 301127_31 / 2021 II - PERIODO 16-04</h7>
      <br>Univerisdad Nacional Abierta y a Distancia UNAD -2021
      <br><b>Fecha de actualización:</b> 24-11-2021
    </div>
</body>

</html>