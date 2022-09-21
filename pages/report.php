<!DOCTYPE html>

<!-- HTML da página do home -->

<html>

<head>

<meta charset='UTF-8'>
<meta http-equiv='X-UA-Compatible' content='IE=edge'>
<meta name='viewport' content='width=device-width, initial-scale=1'>

<title> Inicial </title>

<!-- CSS -->
<link rel='stylesheet' href='./../css/home.css'>
<link rel="stylesheet" href="./../css/report.css">

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
                <li><a href="../index.php">Início</a></li>
                <li><a href="#">Artigos</a></li>
                <li><a href="#" class="link-active" style="text-shadow: 5px 5px 30px #F36008; color:#F36008">Denuncie</a></li>
                <li><a href="team.php">Equipe</a></li>
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
        <div class="contactUs">
      
<!-- Caixa corporal -->
    <div class="box">
                
<!-- Linha laranja -->
    <div class="top-bar"></div>
                
<!-- Começo do mapa -->
<div class="top-map"></div>

<!-- Area do mapa -->
<div class="contact map">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14662.03056058764!2d-51.196646906481305!3d-23.260997280823236!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94eb5b3c89a38993%3A0xbb54ac4c6d64d4f9!2sZona%20Norte%20-%20Londrina%2C%20PR!5e0!3m2!1spt-BR!2sbr!4v1663381126640!5m2!1spt-BR!2sbr" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</div>

<!-- Começo do form -->
<div class="contact form" id="formation">
       
<!-- Area do form -->
<form action="" method="">
    
<!-- Título do form -->
<h3>Denuncie já</h3>

<!-- Area do form interno -->
<div class="formBox">

    <div id="form-pt1" class="fBox">

<!-- Referência -->
        <div class="field input-field">
                                
            <input type="text" maxlength="100" placeholder="Ponto de referência">

        </div>

<!-- Endereço -->
        <div class="field input-field">
                                
            <input type="text" maxlength="100" placeholder="Endereço de destino">

        </div>

    </div>
                    
    <div id="form-pt2" class="fBox">

<!-- Causa -->
        <div class="field select-field">
                                
            <select type="select">

            <option disabled selected hidden>Causa do incidente</option>
            
            <option value="valor1">Vandalismo</option>
            <option value="valor2">Furto</option>
            <option value="valor3">Evento climático</option>
            <option value="valor4">Acidente rodoviário</option>
            <option value="valor5">Falta de infraestrutura</option>
            <option value="valor6">Queda de energia</option>
            <option value="valor7">Outros</option>

            </select>

        </div>
            
        <div class="field input-field">
                     
<!-- Residência -->
            <input id="form-pt20" type="text" maxlength="4" onkeypress="return event.charCode >= 48 && event.charCode <= 57" placeholder="Número da residência" >

        </div>

    </div>
    
    <div class="fBox">

<!-- Mensagem -->
        <div id="form-pt3" class="field textarea-field">
                                
            <textarea type="text" maxlength="500" placeholder="Escreva sua mensagem aqui..."></textarea>

        </div>
    
        <div class="fBox">
                      
<!-- Ocupação do uploader -->
            <section>

<!-- Arquivo -->
                <div id="form" action="" autocomplete="off" enctype="multipart/form-data">

                    <div>
                        
                        <input type="file" id="upload" style="display: none;">
                        
                        <label for="upload">Nome do arquivo</label>

                    </div>

<!-- Bottom upload e downloading -->
                        <button id="up">

                            <span><i class="fa-solid fa-arrow-up-from-bracket"></i></span>

                            <span class="uploading"></span>
                    
                        </button>
                    
<!-- Bottom cancel upload -->
                        <button id="down" class="cancel"><i class="fa-solid fa-ban"></i>
                        
                        </button>
                                
                            <div class="pr">
                                
<!-- Formato do arquivo e tamanho -->
                                <strong>
                                <h4 class="ex">PDF</h4>
                                    <h5 class="size">2.5kb</h5>
                                </strong>

<!-- Barra de progresso -->
                                <progress min="0" max="100" value="0"></progress>
                    
                                <span class="progress-indicator"></span>

                            </div>
                            
                </div>

            </section>
                            
        </div>

    </div>
    
    <div class="fBox">

<!-- Bottom denunciar -->
        <div class="field button-field">

            <button><i class="exclamation fa-solid fa-exclamation"></i>Denunciar</button>

        </div>

    </div>

</div>

</form>

</div>
                
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

<!-- Div do footer anulado -->
<div  class="footer-annulled"></div>

</main>

<!-- Segundo corpo do site -->
<div class="menu">
    <ul>
        <li><i class="fa-regular fa-user"></i><a href="account.php">Conta</a></li>
        <li><i class="fa-solid fa-map-pin"></i><a href="#">Denúncias</a></li>
    </ul>
    
    <ul>
        <li><i class="fa-brands fa-facebook"></i><a href="#">Facebook</a></li>
        <li><i class="fa-brands fa-twitter"></i><a href="#">Twitter</a></li>
        <li><i class="fa-brands fa-instagram"></i><a href="#">Instagram</a></li>
        <li><i class="fa-solid fa-envelope"></i><a href="#">Gmail</a></li>
        <li><i class="fa-brands fa-github"></i><a href="#">GitHub</a></li>
    </ul>

    <ul>
        <li><i class="fa-solid fa-plus"></i><a href="#">Extras</a></li>
    </ul>
</div>

</header>

</body>

</html>

<!-- JS do report -->
<script type="text/javascript" src="./../js/report.js"></script>