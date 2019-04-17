<!DOCTYPE HTML>
<html lang="pl">

<head>

    <meta charset="UTF8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Najlepszy blog o grach wideo!</title>
    <meta name="keywords" content="gry, konsole, recenzje">
    <meta name="author" content="Damian Kobiela">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- <link rel="stylesheet" href="main.css"><-->
    <link rel="stylesheet" href="css/fontello.css">
    <link href="<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">

    <style>
            * {
                box-sizing: border-box;
            }

            .container {
                text-align: center;
                padding: 16px;
                background-color: white;
            }   

            hr {
                border: 1px solid #f1f1f1;
                margin-bottom: 25px;
            }

            input[type=text], input[type=password] {
                width: 100%;
                padding: 15px;
                margin: 5px 0 22px 0;
                display: inline-block;
                border: none;
                background: #f1f1f1;
            }

            input[type=text]:focus, input[type=password]:focus {
                background-color: #ddd;
                outline: none;
            }

            .login {
                background-color: #1c74b2;
                color: white;
                padding: 16px 20px;
                margin: 8px 0;
                border: none;
                cursor: pointer;
                width: 100%;
                opacity: 0.9;
            }

            .signin {
                background-color: #f1f1f1;
                text-align: center;
            }
    </style>
    <script>
            function validateForm() {
                var x = document.forms["formularz"]["uzytkownik"].value;
                if (x == "") {
                    alert("Proszę podać nazwę użytkownika!");
                    return false;
                }
                var y = document.forms["formularz"]["haslo"].value;
                if (y == "") {
                    alert("Proszę podać hasło!");
                    return false;
                }
            }
    </script>
</head>
<body>
<form name="formularz" action="logincheck.php" onsubmit="return validateForm()" method="POST">
        <div class="container">
            <hr>
            <label for="username"><b>Uzytkownik: </b></label>
            <input type="text" name="uzytkownik" placeholder="Podaj nazwę użytkownika">

            <label for="password"><b>Hasło: </b></label>
            <input type="password" name="haslo" placeholder="Wpisz swoje hasło">

            <button type="submit" class="login">Zaloguj</button>
            <hr>
        </div>

        <div class="container signin">
            <p>Nie masz konta? <a href="register.php">Zarejestruj się!</a>.</p>
        </div>
    </form>

    <?php

    ?>
</body>
</html>