<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="/sign.css">
    <title>BMW E39</title>
</head>

<body>

    <div class="main">
        <div class="column1">
            <div id="login_form">
                <form action="/changepasswd" method="post">
                    <label><h3>MUDAR PASSWD</h3></label><br>

                    <label for="nome">Nome De Utilizador:</label><br>
                    <input type="text" id="nome" name="nome" value="<?=$_SESSION['username']?>" readonly><br>

                    <label for="password">Password:</label><br>
                    <input type="password" id="password" name="password">

                    <div class="buttons">
                        <button id="changepasswd" type="submit" formaction="/mudarpass.php">MUDAR PASSWD</button>
                    </div>
                </form>
            </div>
        </div>
        <div class="column2">
            <img src="/bmw-m5.jpg" alt="">
        </div>
    </div>

</body>


</html>