
<!DOCTYPE html>

<!-- HTML da página do home -->

<html>

<head>

<meta charset='UTF-8'>
<meta http-equiv='X-UA-Compatible' content='IE=edge'>
<meta name='viewport' content='width=device-width, initial-scale=1'>

<title> Inicial </title>

<!-- CSS -->
<link rel='stylesheet' href='css/home.css'>

<!-- Icons -->
<script src="https://kit.fontawesome.com/0d966a43c2.js" crossorigin="anonymous"></script>

</head>

<body class="body">

<!-- Cabeçalho lateral -->
<header>
        
<!-- Ocupação do icon menu -->
<aside>

    <div class="menu-btn">
        <span><i class="fa-solid fa-bars"></i></span>
    </div>

<!-- icon's laterais -->
    <ul class="social">
        <li><i class="supp fa-solid fa-person"></i></li>
        <li><i class="sup fa-solid fa-gear"></i></li>
        <li><i class="sup fa-solid fa-circle-info"></i></li>
    </ul>
</aside>

<!-- Corpo do site -->
<main>
    <nav>
        <div class="container">

            <!-- Logo iLume -->
            <div>
                <a href="#" class="iLume"  id="menu-btn">
                    <span style="text-shadow: 5px 5px 30px #F36008; color:#F36008">i</span>Lume
                </a>
            </div>

            <!-- Páginas de seleção -->
            <ul class="vai">
                <li><a href="#" class="link-active" style="text-shadow: 5px 5px 30px #F36008; color:#F36008">Início</a></li>
                <li><a href="#">Artigos</a></li>
                <li><a href="pages/report.php">Denuncie</a></li>
                <li><a href="pages/team.php">Equipe</a></li>
            </ul>

            <!-- Icon menu -->
            <div class="menu-btn">
                <span><i class="fa-solid fa-bars"></i></span>
            </div>
        </div>
    </nav>

<!-- Corpo secundário do site -->
<div class="header-body">
    <div class="container">

<!-- Nome do projeto -->
<div>          
    <h1 class="Project">Project TCC</h1>
        <div class="Projec2">


        <p> Um projeto dedicado a segurança pública em relação a iluminação urbana noturna. Por um mundo mais iluminado! </p> 
        </div>
</div>

        <div class="slider">
                
<!-- Sites de notícias -->
            <div id="Project">
                <h1 class="slider-count"> Sites de notícia </h1> <br>
                
                <div class="progresss">
                <div></div>
                    
                </div> <br>
        
                <p class="slider-cntrl">g1</p>
                <p class="slider-cntrl">UOL</p>
                <p class="slider-cntrl">R7</p>
                <p class="slider-cntrl">CNN Brasil</p>
                <p class="slider-cntrl">COPEL</p>
                
            </div>
        </div>

    </div>
</div>

<!-- Configuração para animação do JS -->
<ul class="pagination-mobile">
    <li class="pag-active"></li>
    <li></li>
    <li></li>
</ul>

<!-- Div do footer -->
<div>
    <div class="container">
            <div>

<!-- Lado esquerdo do footer -->
                <div class="align-footer">
                    <img id="marista" src="img/marista.png"> <br>
                    <small class="copyright"> Copyright ©2022 Project TCC. designed by iLume </small>
                </div>  
            </div>

<!-- Lados direito do footer -->
            <div class="footer-home">
                <img id="news" src="img/copel.png"
                alt="img" class="img">
                <div class="align-footer">
                    <div class="copel">
                    <small id="small" class="title">
                        Copel – Companhia Paranaense de Energia: gera, transmite, distribui e comercializa energia. A empresa é uma das maiores companhias elétricas do Brasil.
                    </small>
                    <div class="Saiba">
                    <a href="#">Saiba mais</a>
                    </div>
                </div>
                    
                </div>
            </div>
    </div>
</div>

</main>

<!-- Segundo corpo do site -->
    <div class="menu">
        <ul>
            <li><i class="fa-regular fa-user"></i><a href="pages/profile.php">Conta</a></li>
            <li><i class="fa-solid fa-map-pin"></i><a href="pages/report.php">Denúncias</a></li>
        </ul>
        
        <ul>
            <li><i class="fa-brands fa-facebook"></i><a href="#">Facebook</a></li>
            <li><i class="fa-brands fa-twitter"></i><a href="#">Twitter</a></li>
            <li><i class="fa-brands fa-instagram"></i><a href="#">Instagram</a></li>
            <li><i class="fa-brands fa-whatsapp"></i><a href="#">Whatsapp</a></li>
            <li><i class="fa-brands fa-github"></i><a href="#">GitHub</a></li>
        </ul>
    
        <ul>
            <li><i class="fa-solid fa-plus"></i><a href="#">Extras</a></li>
        </ul>
    </div>

</header>
    
</body>
</html>

<script type="text/javascript" src="js/home.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
