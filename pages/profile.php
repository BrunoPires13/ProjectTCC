<?php

    session_start();

?>



<!DOCTYPE html>

<!-- HTML da página do account -->

<html>

<head>
    
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title> Account </title>

<!-- CSS -->
<link rel="stylesheet" href="./../css/account.css">

<!-- Icons -->
<link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
<script src="https://kit.fontawesome.com/0d966a43c2.js" crossorigin="anonymous"></script>  
                
</head>

<body>
        
<main>

<!-- Div que leva o form para a direita -->
<div class="right">

<!-- Botão de ligar a luminária -->
<button class="but" type="button" onclick="toggleBtn()" id="btn"><span></span></button>

<!-- Section dos forms -->
<section class="container forms">

    <?php

          echo  '<p>Usuario n°:</p>' . $_SESSION['id_usuario']; 

    ?>


    <!-- <div class="field button-field"> -->
        <a href="../methods/logout.php">
            <button class="logout">Sair</button>
        </a>
    </div>

</section>

</div>

<!-- Div que leva o form para a esquerda -->
<div class="footer-account">
    <div class="lamp-container">
        <img src="./../img/lamp.png" class="lamp">
        <img src="./../img/light.png" class="light" id="light">
    </div>
    
<!-- Div que organiza oque fica dentro -->
<div>
    <div class="align-account"> <br>           
            
    <ul>
        <li><i class="cb fa-regular fa-circle-left"></i><a href="../">Voltar</a>
        </li>
    </ul>

    <small> Ao continuar, concorda com os Termos de Utilização. Leia a nossa Política de Privacidade. </small>
    </div> 
</div>
</div>

</main>

<!-- JS do account -->
<script src="./../js/account.js"></script>

</body>

</html>