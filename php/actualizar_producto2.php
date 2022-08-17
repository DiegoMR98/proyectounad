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
      <a class="navbar-brand" href="#">APPControlCVI</a>
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
              <li><a class="dropdown-item" href="./php/crearbd.php">Crear Base de Datos</a></li>
              <li><a class="dropdown-item" href="./php/creartabla.php">Crear Tabla</a></li>
              <li><a class="dropdown-item" href="./php/pdf.php">Generar Reporte PDF</a></li>
              <li><a class="dropdown-item" href="./php/backup.php">Generar Backup</a></li>
            </ul>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
              aria-expanded="false">Inventario</a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="./ListaProductos.html">Lista productos</a></li>
              <li><a class="dropdown-item" href="./IngresoProducto.html">Ingreso de producto</a></li>
              <li><a class="dropdown-item" href="./ModificarProducto.html">Actualizar producto</a></li>
              <li><a class="dropdown-item" href="./BorrarProducto.html">Eliminar producto</a></li>
              <li><a class="dropdown-item" href="./ConsultarProducto.html">Consultar producto</a></li>
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
 
<br>
      <main>
        <h3 style="text-align: center;">
          ACTUALIZACION DE PRODUCTOS
        </h3>
    <?php

    require('config.php');

    $id = $_GET['id'];


    $sql = "SELECT * FROM tabla31 WHERE id=$id";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {

    ?>
        <div class="container">
          <div class="row">
            <div class="col">
            <form action="actualizar2.php" method="POST">
                <div class="form-group">
                  <label for="codproducto">Código del producto:</label>
                  <input readonly type="Float" class="form-control" value=" <?php echo $row['id'] ?>" id="id"  name="id"
                    style="text-align: center; width: 275px;" >
                  <br>
                  <label for="nomproducto">Nombre del Producto:</label>
                  <input type="text" class="form-control" value=" <?php echo $row['nom_producto'] ?>"  id="nom_producto" placeholder="Ingrese nombre del producto" name="nom_producto"
                    style="text-align: center;width:275px;">
                  <br>
                  <label for="marproducto">Marca del producto:</label>
                  <input type="text" class="form-control" value=" <?php echo $row['marca_producto'] ?>" id="marca_producto" placeholder="Ingrese la marca del producto" name="marca_producto"
                    style="text-align: center;width:275px;">
                </div>
            </div>

            <div class="col">
              <table>
                <tr>
                  <div class="form-group">
                    <label for="precompra">Precio de Compra:</label>
                    <input type="Float" class="form-control" value=" <?php echo $row['precio'] ?>" id="precio" name="precio" style="width: 300px";> 
                      
                    <br>
                </tr>
                <tr>
                  <label for="cancompra">Cantidad comprada:</label>
                  <input type="Float" class="form-control" value=" <?php echo $row['cantidad'] ?>" id="cantidad" name="cantidad"  style="width: 300px;">
                  <br>
                </tr>
                <tr>
                  <td>
                    <input type="submit" name="" value="Modificar Producto" onclick="" class="btn btn-primary">
                  </td>
                  <br>
                  <td>
                    
                  </td>
                </tr>
              </table>
            </div>
            </form>
          </div>
        <?php

            }

            } else {
        ?>

        <!-- The Modal -->
  
        <div class="modal-dialog">
            <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Error</h4>
          <button class="close" onclick="location.href='../index.html'">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          
 		<?php
        echo "El producto no existe en la base de datos." . "<br>";
		?>


        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button class="btn btn-danger" onclick="location.href='../index.html'">Cerrar</button>
        </div>
        
      </div>
    </div>



    <?php
    }

    mysqli_close($conn);
    ?> 
      </main>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
    <br>
    <br>  
<!-- Pie de pagina-->
<footer class="bg-primary text-center text-white">
  <div class="text-center p-1" style="background-color: rgba(0, 0, 0, 0.2);">
    <h7 style="text-align: center;">PROGRAMACIÓN DE SITIO WEB - 301127_31 / 2021 II - PERIODO 16-04</h7>
    <br>Univerisdad Nacional Abierta y a Distancia UNAD -2021
    <br><b>Fecha de actualización:</b> 28-10-2021
  </div>
  </body>
</html>