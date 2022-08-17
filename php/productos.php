<!-- URIEL ANTHONI ILES CALDERON - ADSI SENA-->
<?php 
	
	require('config.php');

    $consultar = "SELECT * FROM tabla31";
    $query = mysqli_query($conn, $consultar);
    $array = mysqli_fetch_array($query);

 ?>
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
  <!-- Optional JavaScript; choose one of the two! -->
  <br>
  
    <h4 style="text-align: center;">
      REGISTRO GENERAL DE PRODUCTOS
    </h4>
    <br>
    <div class="container">
      <table class="table table-hover">
        <thead>
          <tr class="table-primary">
            <th scope="col">ID</th>
            <th scope="col">NOMBRE</th>
            <th scope="col">MARCA</th>
            <th scope="col">PRECIO</th>
            <th scope="col">CANTIDAD</th>
            <th scope="col">ACCIONES</th>
          </tr>
        </thead>
        <tbody id="datos">
        <?php foreach ($query as $row){ ?>
          <tr class="table-active">
            <th scope="row"><?php echo $row ['id'];?></th>
            <td><?php echo $row ['nom_producto'];?></td>
            <td><?php echo $row ['marca_producto'];?></td>
            <td><?php echo $row ['precio'];?></td>
            <td><?php echo $row ['cantidad'];?></td>
            <td><div class="btn-group" role="group" aria-label="">
              <a href="../php/actualizar_producto2.php?id=<?php echo $row ['id']; ?>" class="btn btn-info">Editar</a> &nbsp; 
              <a href="../php/eliminar_producto2.php?id=<?php echo $row ['id'];?>" class="btn btn-danger">Borrar</a>
              </div></td>
          </tr>       
        </tbody>
        <?php
            }
        ?>
      </table>
  
  

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
  
</body>
</html>
