<?php
session_start();

if (isset($_SESSION['username'])) {

} else {
    header("Location: /signin_signup.php");
    die();
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="/index.css">
    <title>BMW E39</title>
</head>

<div class="navbar">
    <h1>Bem Vindo
        <?= $_SESSION['username'] ?> !
    </h1>
    <form method="post">
        <input type="text" id="nome" name="nome" value="<?=$_SESSION['username']?>">
        <button id="signout" type="submit" formaction="/logout.php">SIGN OUT</button>
        <button id="deluser" type="submit" formaction="/apagar.php">APAGA ME</button>
        <button id="deluser" type="button" onclick="window.location.href='/mudarpass.html.php'">MUADAR PASSWD</button>
    </form>
</div>

<body>
    <h1>BMW M5 E39</h1>
    <div class="main">
        <div class="column1">
            <img src="/bmw-m5.jpg" alt="">
        </div>
        <div class="column2">
            <div class="stats">
                <div class="stat" id="cv">
                    <div>CV:</div>
                    <div>395 CV</div>
                </div>
            </div>
            <div class="stats">
                <div class="stat" id="topspeed">
                    <div>Velocidade Maxima:</div>
                    <div>250 km/h</div>
                </div>
            </div>
            <div class="stats">
                <div class="stat" id="weight">
                    <div>Peso:</div>
                    <div>1695 kg</div>
                </div>
            </div>
            <div class="stats">
                <div class="stat" id="range">
                    <div>Autonomia:</div>
                    <div>503 km</div>
                </div>
            </div>
            <div class="stats">
                <div class="stat" id="maxtorque">
                    <div>Torque Maximo:</div>
                    <div>500 Nm</div>
                </div>
            </div>
            <div class="stats">
                <div class="stat" id="economy">
                    <div>Economia:</div>
                    <div>13.9 L/100 km</div>
                </div>
            </div>
        </div>

    </div>

</body>


</html>