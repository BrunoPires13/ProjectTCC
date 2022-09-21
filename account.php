<!DOCTYPE html>

<!-- HTML da página do account -->

<html>

<head>
    
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title> Account </title>

<!-- CSS -->
<link rel="stylesheet" href="css/account.css">

<!-- Icons -->
<link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
<script src="https://kit.fontawesome.com/0d966a43c2.js" crossorigin="anonymous"></script>  
                
</head>

<body>
        
<main>

<!-- Div que leva o form para a direita -->
<div class="right">

<!-- Botão de ligar a luminária -->
<button class="but" type="button" onclick="toggleBtn()" id="btn"><span></span>></button>

<!-- Section dos forms -->
<section class="container forms">

<!-- Form Conta -->
<div class="form login">

<!-- Form Botões do Facebook e Google -->
<div class="form-content">

<!-- Entrar -->]
<header>Conta</header>

<form action="#" method="">
    <div class="field input-field">
        <input type="email" placeholder="Email" class="input"> 
    </div>

    <div class="field input-field">
        <input type="password" placeholder="Senha" class="password">
        <i class='bx bx-hide eye-icon'></i>
    </div>

        <div class="form-link">
            <a href="#" class="forgot-pass">Esqueceu a senha?</a>
        </div>

    <div class="field button-field">
        <button>Entrar</button>
    </div>
</form>

        <div class="form-link">
            <span>Não tem uma conta? <a href="#" class="link signup-link">Registre-se</a></span>
        </div>
</div>

<!-- Divisão do Ou -->
<div class="line"></div>

<!-- Botão do Facebook -->
<div class="media-options">           
    <a href="#" class="field facebook">
    <i class="face fa-brands fa-facebook-f"></i>
        <span>Continuar com o Facebook</span>
    </a>
</div>

<!-- Botão do Google -->
<div class="media-options">
    <a href="#" class="field google">
    <i class="goo fa-brands fa-google"></i>
        <span>Continuar com o Google</span>
    </a>
</div>

</div>

<!-- Form Conta -->
<div class="form signup">

<!-- Form Botões do Facebook e Google -->
<div class="form-content">

<!-- Cadastrar -->
<header>Cadastro</header>

<form action="#" method="">
    <div class="field input-field">
        <input type="text" placeholder="Crie um nome de usuário" class="input">
    </div>

    <div class="field input-field">
        <input type="email" placeholder="Insira um endereço de Email" class="input">
    </div>

    <div class="field input-field">
        <input type="password" placeholder="Crie uma Senha" class="password">
    </div>

    <div class="field input-field">
        <input type="password" placeholder="Confirme a senha" class="password">
        <i class='bx bx-hide eye-icon'></i>
    </div>

    <div class="field button-field">
        <button>Cadastrar</button>
    </div>
</form>

    <div class="form-link">
        <span>Já tem uma conta? <a href="#" class="link login-link">Entre</a></span>        
    </div>
</div>

<!-- Divisão do Ou -->
<div class="line"></div>

<!-- Botão do Facebook -->
<div class="media-options">           
    <a href="#" class="field facebook">
    <i class="face fa-brands fa-facebook-f"></i>
        <span>Continuar com o Facebook</span>
    </a>
</div>

<!-- Botão do Google -->
<div class="media-options">
    <a href="#" class="field google">
    <i class="goo fa-brands fa-google"></i>
        <span>Continuar com o Google</span>
    </a>
</div>
</div>

</section>

</div>

<!-- Div que leva o form para a esquerda -->
<div class="footer-account">
    <div class="lamp-container">
        <img src="img/lamp.png" class="lamp">
        <img src="img/light.png" class="light" id="light">
    </div>
    
<!-- Div que organiza oque fica dentro -->
<div>
    <div class="align-account"> <br>           
            
    <ul>
        <li><i class="cb fa-regular fa-circle-left"></i><a href="index.php">Voltar</a>
        </li>
    </ul>

    <small> Ao continuar, concorda com os Termos de Utilização. Leia a nossa Política de Privacidade. </small>
    </div> 
</div>
</div>

</main>

<!-- JS do account -->
<script src="js/account.js"></script>

</body>

</html>