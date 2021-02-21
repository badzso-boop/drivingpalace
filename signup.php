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
    <title>Driving Peace</title>
</head>
<body>
    <div class = "csik">
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
                <a id="link" href="#">Útvonalak</a>
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

    <main class = "main">
        <div class="register">
        <h1>Regisztráció</h1>
            <form action="includes/signup.inc.php" method="post">
            <input type="text" name="name" placeholder="Teljes Név...">
            <input type="text" name="email" placeholder="Email...">
            <input type="text" name="uid" placeholder="Felhasználónév...">
            <input type="password" name="pwd" placeholder="Jelszó...">
            <input type="password" name="pwdrepeat" placeholder="Jelszó Újra...">
            <button type="submit" name="submit">Regisztráció</button>
            </form>
        </div>
        <?php
            if (isset($_GET["error"])) {
                if ($_GET["error"] == "emptyinput") {
                echo "<p>Kérlek töltsd ki az összes mezőt!</p>";
                }
                else if ($_GET["error"] == "invaliduid") {
                echo "<p>Válassz egy másik felhasználónevet!</p>";
                }
                else if ($_GET["error"] == "invalidemail") {
                echo "<p>Válassz egy helyes email címet!</p>";
                }
                else if ($_GET["error"] == "passwordsdontmatch") {
                echo "<p>A jelszavak nem egyeznek!</p>";
                }
                else if ($_GET["error"] == "stmtfailed") {
                echo "<p>Valami hiba történt!</p>";
                }
                else if ($_GET["error"] == "usernametaken") {
                echo "<p>Felhasználónév foglalt!</p>";
                }
                else if ($_GET["error"] == "none") {
                echo "<p>SIkeresen beregisztráltál!</p>";
                }
            }
        ?>
    </main>
    <script src="js/main.js"></script>
</body>
</html>