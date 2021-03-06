<?php
    session_start();
    include_once 'includes/functions.inc.php';
?>
<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@300;500;700&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Audiowide&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="favicon.ico" />
    <title>Driving Palace - Főoldal</title>
</head>
<body>
    <div class = "csik">
        <span id="aktualis">Főoldal</span>
        <span id="logo">Driving Palace.</span>
        <!--<img title="A Driving Palace Logoja" id="logo" alt="A Driving Palace Logoja" src="logo.png">-->
        <img src="anto.gif" alt="ez egy gif :)" id = "suzuki">
    </div>
    <div class="menu-btn">
        <div class="menu-btn__burger"></div>
    </div>
    <nav class = "navbar">
        <ul id="list">
            <?php 
                if (isset($_SESSION["useruid"])) {
                    echo "<li id = 'listitem'><a id = 'link' href='#'>Felhasználói Fiók</a></li>";
                    echo "<li id = 'listitem'><a id = 'link' href='logout.php'>Kilépés</a></li>";
                }
                else {
                    echo "<li id='listitem'><a id='link' href='login.php'>Belépés</a></li>";
                    echo "<li id='listitem'><a id='link' href='signup.php'>Regisztráció</a></li>";
                }
            ?>
            <li id="listitem">
                <a id="link" href="utvonalak.php">Útvonalak</a>
            </li>
            <li id="listitem">
                <a id="link" href="#">Helyszínek</a>
            </li>
            <li id="listitem">
                <a id="link" href="#">Fórum</a>
            </li>
        </ul>
        <div class="oracsoport">
            <div id="speedometer">
                <div style="display: none;"><img id="sprite" src="assets/icons.svg"></div>
                <canvas id="canvas" width="425" height="210"></canvas>
            </div>
            <script src="js/fraction.min.js"></script>
            <script src="js/speedometer.js"></script>
            <script src="js/sebesseg.js"></script>
        </div>
    </nav>

    <main class = "main" id="main">
        <div class="about">
            <h1>Üdvözöllek a <span id="colored">Driving Palace</span> oldalán!</h1>
            <p id = "fooldal-szov">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque blandit nisi id tortor mollis bibendum. Sed ut neque et sem rutrum suscipit. Nulla in semper elit, et accumsan sapien. Vivamus et est et ipsum luctus ultrices eu ut tortor. In sapien ex, pretium eget orci at, faucibus aliquet tellus. Nulla at varius justo, sed volutpat nulla. Integer sed quam ornare, tempus elit non, lacinia neque. Vestibulum posuere a eros tincidunt luctus.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque blandit nisi id tortor mollis bibendum. Sed ut neque et sem rutrum suscipit. Nulla in semper elit, et accumsan sapien. Vivamus et est et ipsum luctus ultrices eu ut tortor. In sapien ex, pretium eget orci at, faucibus aliquet tellus. Nulla at varius justo, sed volutpat nulla. Integer sed quam ornare, tempus elit non, lacinia neque. Vestibulum posuere a eros tincidunt luctus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque blandit nisi id tortor mollis bibendum. Sed ut neque et sem rutrum suscipit. Nulla in semper elit, et accumsan sapien. Vivamus et est et ipsum luctus ultrices eu ut tortor. In sapien ex, pretium eget orci at, faucibus aliquet tellus. Nulla at varius justo, sed volutpat nulla. Integer sed quam ornare, tempus elit non, lacinia neque. Vestibulum posuere a eros tincidunt luctus.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque blandit nisi id tortor mollis bibendum. Sed ut neque et sem rutrum suscipit. Nulla in semper elit, et accumsan sapien. Vivamus et est et ipsum luctus ultrices eu ut tortor. In sapien ex, pretium eget orci at, faucibus aliquet tellus. Nulla at varius justo, sed volutpat nulla. Integer sed quam ornare, tempus elit non, lacinia neque. Vestibulum posuere a eros tincidunt luctus.</p>
            <p id="fooldal-footer">2021 - Ujj Norbert</p>
        </div>
    </main>
    <script src="js/main.js"></script>
</body>
</html>