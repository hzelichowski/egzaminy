<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Policja Rybacka</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Policja Rybacka</h1>
    </header>
    <nav>
        <ul>
            <li><a href="index.php">Strona główna</a></li>
            <li><a href="about.php">O nas</a></li>
        </ul>
    </nav>
    <section>
        <h2>Witaj na stronie Policji Rybackiej</h2>
        <form method="post" action="index.php">
            <label for="username">Podaj swoje imię:</label>
            <input type="text" id="username" name="username">
            <button type="submit">Zapisz imię w Cookie</button>
        </form>
    </section>
    <?php
        if(!empty($_POST["username"])){
            setcookie("ciasteczko", $_POST["username"], TIME() + 3600); 
        }

        if(!empty($_COOKIE["ciasteczko"])) {
            echo "<section><p>Informacje wyświetlane z cookie: " . $_COOKIE["ciasteczko"] . "</p></section>";
        }
    ?>
    <footer>
        <p>Prawa autorskie © Policja Rybacka</p>
    </footer>
</body>
</html>