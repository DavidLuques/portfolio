<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="css/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="css/stylee.css">
    <link rel="stylesheet" href="css/fontawesome-free-5.15.2-web/css/fontawesome.min.css">
    <link rel="stylesheet" href="css/fontawesome/fontawesome-free-5.15.2-web/css/all.css">
    <link rel="stylesheet" href="css/fontawesome/fontawesome-free-5.15.2-web/css/all.min.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800,900&display=swap"
        rel="stylesheet">
</head>

<body id="inicio">
<header>
        <div class="container">
            <?php $pg= "inicio";
            include_once("menu.php"); ?>
        </div>
    </header>
    
    <main>
        <div class="container">
            <div class="row">
               
                <div class="col-12  text-center div-cohete">
                    <a href="proyectos.php"><img src="images/cohete.svg" class="cohete"></a>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-sm-6 my-4 mt-sm-5 text-center offset-sm-3 mb-3">
                    <div class="input-home">
                        <p class="p-3">1 Bienvenid@ a mi sitio web sobre loloxxxxxxxxxxx</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 text-center p-5" >
                    <a href="proyectos.php" class="btn shadow btn3">Conoce mis proyectos</a>
                </div>
            </div>
        </div>
    </main>

    <footer>
        <div class="container">
            <div class="row mt-5">
                <div class="col-sm-3 col-12 text-sm-left text-center pb-sm-0 pb-3">
                    <a href="https://github.com" target="_blank" title="Github"><i class="fab fa-github"></i></a>
                    <a href="https://www.linkedin.com/in//" target="_blank" title="Linkedin"><i class="fab fa-linkedin-in"></i></a>
                </div>
                <div class="col-sm-3 col-12 text-sm-left text-center pb-sm-0 pb-3">
                        Sponsor <a href="https://depcsuite.com" target="_blank" title="DEPCSUITE">DePC Suite</a>
                </div>
                <div class="col-sm-3 col-12 text-sm-left text-center pb-sm-0 pb-3">
                    <a href="mailto:info@depcsuite.com">info@nelsontarche.com.ar</a>
                </div>
                <div class="col-sm-3 col-12 text-right">
                    <a href="https://api.whatsapp.com/send?phone=541162423341" title="Whatsapp"><i class="fab fa-whatsapp"></i></a>
                </div>
            </div>
        </div>
    </footer>
</body>

</html>
#pop