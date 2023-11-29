<?php

session_start();
include './php/conexao.php';

if ($_SESSION['autenticado'] != true) {
  header("location: index.php");
  exit;
} 
?>

<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css"/>
    <link rel="stylesheet" href="css/acordeon.css">
    <link rel="stylesheet" href="css/drop.css">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" type="text/css"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/cf6fa412bd.js" crossorigin="anonymous"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <title>LogTrans</title>
  </head>
  <body>
    <header>
      <nav class="navbar">
        <div>
          <a href="index.php"><img class="nav-branding f1" src="img/Logo.png"></a>
        </div>
        

        <ul class="nav-menu">
          <li class="nav-item">

            <a href="#contato" class="nav-link">CONTATO</a>
          </li>

          <li class="nav-item">
            <a href="#empresa" class="nav-link">SOBRE A EMPRESA</a>
          </li>

          <li class="nav-item">
            <a href="#" class="nav-link">NOSSOS SERVIÇOS</a>
          </li>
        </ul>

        <div class="hamburguer">
          <span class="bar"></span>
          <span class="bar"></span>
          <span class="bar"></span>
        </div>

      </nav>
    </header>
  
        <section class="meio">
          <div class="cent">
            <a  href="login.php"><button class="btn2">Acompanhe Sua Entrega</button></a>
            <a href="#"><button class="btn2">Solicitar Retirada</button></a>
            <button class="btn2">Seja Nosso Parceiro</button>
          </div>
        </section>

<!-- <div class="video1" >
<video controls>
    <source id="bannerVideo" src="img/institucional.mp4" type="video/mp4">
    </video>
</div> -->

<div class="container">
    <div class="row">
        <div class="col-md-offset-3 col-md-6">
            <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headingOne">
                        <h4 class="panel-title">
                            <a id="empresa" class="first" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                MISSÃO
                                <span> </span>
                            </a>
                        </h4>
                    </div>
                    <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                        <div class="panel-body">
                            <p>Fornecer uma solução eficaz, para o mercado digital e seus usuários, encurtando tempo e custos aumentando a assertividade e segurança de nosso clientes.</p>
                        </div>
                    </div>
                </div>

                <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headingTwo">
                        <h4 class="panel-title">
                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                VISÃO
                                <span> </span>
                            </a>
                        </h4>
                    </div>
                    <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                        <div class="panel-body">
                            <p>Ser referência em processos logísticos na cidade de Linhares. Atuando de maneira inovadora, transformando os processos de recebimento, armazenagem e distribuição em valor para nossos clientes.</p>
                        </div>
                    </div>
                </div>

                <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headingThree">
                        <h4 class="panel-title">
                            <a class="collapsed last" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                              VALORES
                                <span> </span>
                            </a>
                        </h4>
                    </div>
                    <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                        <div class="panel-body">
                            <p>Segurança, ética, honestidade, discrição, responsabilidade, valorização e respeito com às pessoas.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


    <video autoplay muted oncontextmenu="return false;" loop class="video">
        <source id="bannerVideo" src="img/video.mp4" type="video/mp4">
    </video>


    <!-- AREA DE CONTATO -->
    <main class="grid" id="form-contato">
      <!-- botao -->
      <section>
        <div class="center navbar2">
          <div class="box">
            <div class="icon whatsapp">

              <a class="icon whatsapp" href="https://wa.me/5527998146383?text=Ol%C3%A1,%20Gostaria%20de%20ajuda">

                <ion-icon name="logo-whatsapp" class="icon whatsapp"></ion-icon>
                <span>WHATSAPP</span>
              </a>
            </div>
          </div> 

          <div class="box">
            <div class="icon instagram">
          
              <a class="icon instagram" href="https://www.instagram.com/logtrans154/">

                <ion-icon class="icon instagram" name="logo-instagram"></ion-icon>
                <span>INSTAGRAM</span>
              </a>
            </div>
          </div>   
        </div>

          <div class="center">
            <iframe class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3763.827373520278!2d-40.072292173813096!3d-19.376625971317523!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xb625d9b2532f1b%3A0xf613f09c540e2a0c!2sAv.%20Prefeito%20Samuel%20Batista%20Cruz%2C%203701-3999%20-%20Tr%C3%AAs%20Barras%2C%20Linhares%20-%20ES%2C%2029907-380!5e0!3m2!1spt-BR!2sbr!4v1689207255488!5m2!1spt-BR!2sbr" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>

      </section>

      <!-- form -->
      <form class="form-contato center" action="https://api.staticforms.xyz/submit" method="post">
        <fieldset class="fiel">
          <h2 id="contato">Contato</h2>
          <label hidden for="name">Nome</label>
          <input id="input" type="text" name="name" placeholder="Digite seu Nome" autocomplete="off" required>
  
          <label hidden for="email">Email</label>
          <input id="input1" type="email" name="email" placeholder="Digite seu Email" autocomplete="off" required>
  
          <label hidden for="message">Mensagem</label>
          <textarea id="textarea" name="message" cols="30" rows="10" placeholder="Digite sua Mensagem" required></textarea>
  
          <div class="center">
            <button class="b1" type="submit">Enviar</button>
          </div>
        </fieldset>

        <input type="hidden" name="accessKey" value="24a67d53-47f2-480b-8f31-74030271f15f">

        <input type="hidden" name="redirectTo" value="http://127.0.0.1:5500/contato.html">
      </form>
  </main>


  <script src="js/acord.js"></script>
  <script src="js/script.js"></script>
  <script src="js/mobile-navbar.js"></script>
  <script type="text/javascript" src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
  <script type="text/javascript"  src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  </body>
</html>
