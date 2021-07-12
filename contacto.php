<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="css/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="css/fontawesome-free-5.15.2-web/css/fontawesome.min.css">
    <link rel="stylesheet" href="css/fontawesome/fontawesome-free-5.15.2-web/css/all.css">
    <link rel="stylesheet" href="css/fontawesome/fontawesome-free-5.15.2-web/css/all.min.css">
    <link rel="stylesheet" href="css/stylee.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
</head>

<body id="Contacto">

    <header>
        <div class="container">

            <?php
            $pg = "contacto";
            include_once("menu.php"); ?>

        </div>
    </header>

    <main>
        <div class="container">
            <div class="row">
                <div class="col-12 ">
                    <br><br>
                    <h1>Contacto</h1>
                </div>
            </div>

            <div class="row">
                <div class="col-12 col-sm-6 ">
                    <p>Te invito a que me contactes enviandome un mensaje, o bien por <a href=https://api.whatsapp.com/send?phone=541123906876>whats app</a> </p>
                </div>
                <div class="col-12 col-sm-5 " id="formulario">
                    <form><input type="text" placeholder="Nombre" size=30px style="border-radius: 20px" class="form-control shadow"> </form>
                    <form><input type="email" size=50px placeholder="Correo" style="border-radius: 20px" class="form-control shadow"></form>
                    <div class="mb-3">
                        <form><input type="telefono" size=50px placeholder="telefono/whats app" style="border-radius:20px" class="form-control shadow"></form>
                        <form><textarea name="" id="" rows="10" cols="50px" placeholder="Comentarios..." style="border-radius: 20px" class="form-control shadow"></textarea></form>
                        <div id="enviar">
                            <form><input type="submit" class="btn3"></form>
                        </div>
                    </div>
                </div>

            </div>
    </main>
    <footer class="foo-a fixed-bottom">
        <div class="container">
            <div class="row mt-5">
                <div class="col-sm-3 col-12 text-sm-left text-center pb-sm-0 pb-3">
                    <a href="https://github.com" target="_blank" title="Github"><i class="fab fa-github"></i></a>
                    <a href="https://www.linkedin.com/in/" target="_blank" title="Linkedin"><i class="fab fa-linkedin-in"></i></a>
                </div>
                <div class="col-sm-3 col-12 text-sm-left text-center pb-sm-0 pb-3">
                    Sponsor<a href="https://depcsuite.com" target="_blank" title="DEPCSUITE"> DePC Suite</a>
                </div>
                <div class="col-sm-3 col-12 text-sm-left text-center pb-sm-0 pb-3">
                    <a href="mailto:info@depcsuite.com">info@nelsontarche.com.ar</a>
                </div>
                <div class="col-sm-3 col-12 text-right">
                    <a href="https://api.whatsapp.com/send?phone=541123906876" title="Whatsapp"><i class="fab fa-whatsapp"></i></a>
                </div>


            </div>

        </div>
        </div>
    </footer>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery-3.5.1.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/query.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>

</html>