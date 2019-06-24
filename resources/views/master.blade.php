<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
    <title>e-commerce</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/master.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Crete+Round|Josefin+Sans|Montserrat+Alternates" rel="stylesheet">
</head>
<body>
    <div class="container-fluid px-0">
        <nav class="navbar navbar-expand-lg navbar-light ">
            <a class="navbar-brand" href="#">Aurora Materiales</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                    <a class="nav-link" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="productos.php">Productos</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="formulario.php">Contacto</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="about.php" >Sobre Nosotros</a>
                    </li>
                    <?php if (isset($_SESSION["name"])) {?>
                    <li class="nav-item">
                        Bienvenido/a: <?=$_SESSION["name"];?>
                    <a class="nav-item" href="logout.php"> Logout</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="perfil.php" >Mi Perfil</a> <?php } ?>
                    </li>
                    <?php if (empty($_SESSION)){?>
                    <li class="nav-item">
                        <a class="nav-link" href="registro.php" >Registrate</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="login.php" >Ingresa</a>
                    </li>
                    <?php } ?>
                </ul>
            </div>
        </nav>
    @yield('content')
    </div>
    <footer class= "bg-dark foot p-3">
        <div class="row mx-0">
            <div class=" col-12 col-md-4">
                <h3>Aurora Materiales </h3>
                    <ul>
                     <li><a href="formulario.php">Contacto</a> </li>
                     <li><a href="#">Institucional</a> </li>
                     <li><a href="#">Sobre Nosotros</a> </li>
                    </ul>
                    <p class="iconos">
                        <a href="http://wa.me/541130847961?text=hola queria realizar el siguiente pedido "><i class="fab fa-whatsapp"></i></a>
                        <a href="https://www.facebook.com/Aurora-Materiales-1531611110225827/">  <i class="fab fa-facebook"></i></a>
                        <i class="fab fa-instagram"></i>
                        <a href="https://www.youtube.com/"><i class="fab fa-youtube"></i></a>
                    </p>
            </div>
            <div class="col-12 col-md-4">
                <h3>Direccion</h3>
                <p>Arregui 6066</p>
                <p>Tel 4641-3428 / 4642-3139</p>
            </div>
            <div class="d-none d-md-block col-md-4">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3283.066965810513!2d-58.52232268476974!3d-34.627747980453336!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95bcc83004f56f3d%3A0x4cb567431cac3e4d!2sAurora+Materiales+S.A!5e0!3m2!1ses-419!2sar!4v1554669253895!5m2!1ses-419!2sar" width="300" height="200" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
            <hr>
        </div>
    </footer>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>