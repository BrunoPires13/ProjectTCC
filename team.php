<!DOCTYPE html>

<!-- HTML da página do team -->

<html>

<head>
    
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title> Team </title>

<!-- CSS -->
<link rel="stylesheet" href="css/team.css">
<link rel="stylesheet" href="css/home.css">

<!-- Icons -->
<script src="https://kit.fontawesome.com/0d966a43c2.js" crossorigin="anonymous"></script>  
                
</head>

<body>

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
            <ul>
                <li><a href="index.php">Início</a></li>
                <li><a href="#">Artigos</a></li>
                <li><a href="report.php">Denuncie</a></li>
                <li><a href="#" class="link-active" style="text-shadow: 5px 5px 30px #F36008; color:#F36008">Equipe</a></li>
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
        <div class="slider">

<!-- Representantes -->
            <div>   
                <h1 class="slider-count">Representantes</h1> <br>

                <div class="progress">
                <div></div>

                </div> <br>
                
                <p class="slider-cntrl">Bruno Matheus</p>
                <p class="slider-cntrl">Vitor Vasconcellos</p>
                <p class="slider-cntrl">Gabrielly Rufino</p>
                <p class="slider-cntrl">Emanuelly Ferreira</p>
                <p class="slider-cntrl">Nathally Lorelay</p>
            </div>
        </div>
               
<!-- Ocupação do cartão -->
<div class="container-card">

    

<!-- Ocupação do Card -->
<div class="card">

<!-- Linha laranja -->
    <div class="top-bar"></div>

<!-- Items dentro do Card -->
    <div class="nave">

<!-- Icon check -->
        <i class="fa-solid fa-check"></i>

<!-- Foto do membro -->
        <img alt="img" class="icone" id="profession" src="img/i1.png" >
    </div>

<!-- Nome e email -->
    <div class="photo">
        <img alt="img" class="img" src="img/g1.png">
        <strong class="title">Bruno Matheus</strong>
        <h5 class="sub-title">bruno.pires0422@gmail.com</h5>
    </div>

<!-- Função do membro -->
    <h6><i class="fas fa-code" ></i> <span class="tri-title"> front end developer </span></h6>
    
</div>

<!-- Mídias sociais -->
<div class="socialy"> 
    <a href="#"><i class="fa-brands fa-facebook"></i></a>
    <a href="#"><i class="fa-brands fa-twitter"></i></a>
    <a href="#"><i class="fa-brands fa-instagram"></i></a>
    <a href="#"><i class="fa-brands fa-github"></i></a>   
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
<div class="footer-team">

    <div class="align-team">
        <h3 class="js-profession">Front End Developer</h3>
            <small class="js-profession-desc"> Podemos classificar como a parte visual de um site, aquilo que conseguimos interagir. Quem trabalha com Front End é responsável por desenvolver por meio do código uma interface gráfica e, normalmente, com as tecnologias base da Web: HTML, CSS e JavaScript, que irá rodar num navegador Web como o Chrome, Firefox ou Safari. </small>
    </div>
            
</div>

</main>

<!-- Cabeçalho interno -->
<div class="menu">

<!-- icon's user -->
    <ul>
        <li><i class="fa-regular fa-user"></i><a href="account.php">Conta</a></li>
        <li><i class="fa-solid fa-map-pin"></i><a href="#">Denúncias</a></li>
    </ul>
    
<!-- icon's social media -->
    <ul>
        <li><i class="fa-brands fa-facebook"></i><a href="#">Facebook</a></li>
        <li><i class="fa-brands fa-twitter"></i><a href="#">Twitter</a></li>
        <li><i class="fa-brands fa-instagram"></i><a href="#">Instagram</a></li>
        <li><i class="fa-brands fa-whatsapp"></i><a href="#">Whatsapp</a></li>
        <li><i class="fa-brands fa-github"></i><a href="#">GitHub</a></li>
    </ul>

<!-- icon add -->
    <ul>
        <li><i class="fa-solid fa-plus"></i><a href="#">Extras</a></li>
    </ul>

</div>

</header>

</body>

</html>

<!-- JS do team -->
<script type="text/javascript" src="js/team.js"></script>