<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restauracja Wszystkie Smaki</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="baner">
        <h1>Witamy w restauracji „Wszystkie Smaki</h1>
    </div>
    <div class="lewy">
        <img src="menu.jpg" alt="nasze danie">
    </div>
    <div class="prawy">
        <h4>U nas dobrze zjesz</h4>
        <ul>
            <li>Obiady do 40zł</li>
            <li>Przekąski od 10zł</li>
            <li>kolacje od 20zł</li>
        </ul>
    </div>
    <div class="clr">&nbsp;</div>

    <div class="dol">
        <h2>Zarezerwuj stolik on-line</h2>
			<form action="indexx.php" method="post">
				Data (format rrrr-mm-dd): <br>
				<input name="data"><br>

				Ile osób?<br>
				<input type="number" name="osoby"><br>

				Twój numer telefonu:<br>
				<input name="telefon"><br>

				<input type="checkbox" name="check">
				Zgadzam się na przetwarzanie moich danych osobowych<br>
                
				<button type="reset">WYCZYŚĆ</button>
				<button name="wyslij">REZERWUJ</button>
                <?php
                    $dbc = new mysqli ('localhost', 'root', '', 'baza');

	                if(isset($_POST['wyslij'])) {
                        $data = $_POST['data'];
                        $osoby = $_POST['osoby'];
                        $telefon = $_POST['telefon'];
                        $query = "INSERT INTO rezerwacje VALUES (NULL, NULL, '$data', $osoby, '$telefon');";
                        mysqli_query($con, $query);
                        echo "Dodano rezerwcje do bazy";
	                }
	                $dbc->close();
                ?>
			</form>
    </div>

    <div class="stopka">
        Strone wykonal: Hubert Zelichowski
    </div>
</body>
</html>