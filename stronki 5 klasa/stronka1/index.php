<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forum o psach</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="baner">
        <h1>Forum wielbicieli psów</h1>
    </div>
    <div class="lewy">
        <img src="obraz.jpg" alt="foksterier" style="height: 500px;">
    </div>
    <div class="prawy">
    <h2>Zapisz się</h2>
		<form action="index.php" method="post">
			<label>
				login:
				<input type="text" name="login" /><br/>
			</label>
			<label>
				hasło:
				<input type="password" name="haslo" /><br/>
			</label>
			<label>
				powtórz hasło:
				<input type="password" name="hasloo" /><br/>
			</label>
			<button>Zapisz</button>
		</form>

        <?php
		$dbc = new mysqli ('localhost', 'root', '','psy');
		
		if(isset($_POST['login']) && isset($_POST['haslo']) && isset($_POST['hasloo'])) {
			$login = $_POST['login'];
			$haslo = $_POST['haslo'];
			$hasloo = $_POST['hasloo'];
			
			$blad = 1;	
			
            if($login == '' || $haslo == '' || $hasloo == '') {
				echo "<p>Puste pola</p>";
				$blad = 0;
			}

			$query = "SELECT login FROM uzytkownicy;";
			$res = mysqli_query($dbc, $query);
			while($tab = mysqli_fetch_row($res)) {
				if($login == $tab[0]) {
					echo "<p>login jest juz w bazie</p>";
					$blad = 0;
					break;
				}
			} 
			if($haslo != $hasloo) {
				echo "<p>hasla nie sa takie same</p>";
				$blad = 0;
			}
			
			if($blad == 1) {
				$szyfr = sha1($haslo);
				$query = "INSERT INTO uzytkownicy VALUES (NULL, '$login', '$szyfr');";
				mysqli_query($dbc, $query);
				echo "<p>dodano nowe konto</p>";
			}
		}
		mysqli_close($dbc);
		?>
    </div>
    <div class="prawy">
        <h2>Zapraszamy wszystkich</h2>
        <ol>
            <li>Właściciele psów</li>
            <li>Weterynarzy</li>
            <li>tych, co chcą kupić psa</li>
            <li>tych co lubią psy</li>
            <a href="regulamin.html">Przeczytaj regulamin forum</a>
        </ol>
    </div>
    <div class="stopka">
        <p>Stronę wykonał: Hubert Żelichowski</p>
    </div>
</body>
</html>