<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/drop.css">
    <script src="https://kit.fontawesome.com/cf6fa412bd.js" crossorigin="anonymous"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <title>Login</title>
</head>
<body>

    <img class="e2" src="./img/back.jpg" alt="fundo">

    <div class="center1">
    <div class="cont2">
    <div class="buttonsForm">
        <div class="btnColor"></div>
        <button id="btnSignin">LOGIN</button>
        <button id="btnSignup">CADASTRO</button>
    </div>

    <form class="f1" action='./php/autenticar.php' method='POST' id="signin">

        <input class="inp" type="text" placeholder="Email" name="email" required />

        <i class="i fas fa-envelope iEmail2"></i>

        <input class="inp" type="password" placeholder="Password" name="senha" required />

        <i class="i fas fa-lock iPassword"></i>

        <div class="divCheck">

        <input class="inp" type="checkbox" />

        <span>Lembrar-me</span>

        </div>

        <button class="btt" type="submit">LOGIN</button>

    </form>



    <form action='./php/cadastro.php' method='POST' id="signup">

        <input class="inp"  type="text" placeholder="Nome" name="nome" required />

        <i class="i fa fa-user iUser" ></i>

        <input class="inp" type="text" placeholder="Email" name="email" required />

        <i class="i fas fa-envelope iEmail"></i>

        <input class="inp" type="password" placeholder="Password" name="senha" required />

        <i class="i fas fa-lock iPassword2"></i>

        <div class="divCheck">

        <input class="inp" type="checkbox" required />

        <span>Termos</span>

        </div>

        <button class="btt" type="submit">CADASTRE-SE</button>

    </form>

    </div>

    <script src="js/script.js"></script>
    <script src="js/mobile-navbar.js"></script>
</body>
</html>