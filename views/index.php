<!DOCTYPE html>
<html lang="en">
<head>
  <title>Sakila</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

  <style>
      div a{
        color: white;
      }
  </style>

</head>
<body>

    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
            
            </button>
            <div class="collapse navbar-collapse" id="opciones">
                <ul class="nav nav-tabs">
                    
                    <li class="nav-item">
                        <a role="presentation" href="php/Empleados/index.php">Empleados</a>
                    </li>
                    <li>
                        <a href="php/Clientes/index.php" role="button">Clientes</a>
                    </li>
                    <li class="nav-item">
                        <a class="active" href="php/Paises/index.php" role="button">Paises</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="php/Ciudad/index.php" role="button">Ciudades</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="php/Productos/index.php" role="button">Productos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="php/Farmacia/index.php" role="button">Sedes</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="php/Proovedor/index.php" role="button">Proovedores</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="php/Propietario/index.php" role="button">Propietarios</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="php/Factura/index.php" role="button">Facturacion</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" role="button">Cerrar Sesion</a>
                    </li>
                </ul>
            </div>
        </nav>

        
            

        <div class="panel-group hide" id="contenedor"><div class="panel panel-primary">
            <div class="panel-heading" id="titulo"></div>
            <div class="panel-body">
                
                <div class="form-group" id="contenido">        
                    
                </div>
            </div>
        </div>
  
    <input type="hidden" id="pagina" value="index" name="editar"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <!-- Librearía para las funcionalidades de la tabla -->
    <script src="https://cdn.datatables.net/1.10.11/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.11/js/dataTables.bootstrap.min.js"></script>
    <!-- Librería para las alertas -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.28.2/sweetalert2.all.js"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
    

    <!-- Funciones de Lógica de negocio -->
    <script src="js/funcionesJquery.js"></script>
    <!-- Funciones de Lógica de neogcio -->
    <script>
        $(document).ready(Inicio);
    </script>
</body>
</html>