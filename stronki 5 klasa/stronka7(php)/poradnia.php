<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>poradnia</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="baner">
        <h1>PORADNIA SPECJALISTYCZNA</h1>
    </div>
    <div class="lewy">
        <h3>LEKARZE SPECJALIŚCI</h3>
        <table>
            <tr>
                <td colspan="2">poniedziałek</td>
            </tr>
            <tr>
                <td>anna kowalska</td><td>otolaryngolog</td>
            </tr>
            <tr>
                <td colspan="2">Wtorek</td>
            </tr>
            <tr>
                <td>Jan Nowak</td><td>kardiolog</td>
            </tr>
        </table>
        <h3>LISTA PACJENTÓW</h3>
        <?php
			$dbc = new mysqli ('localhost', 'root', '', 'poradnia');
			$query = "SELECT id, imie, nazwisko, choroba FROM `pacjenci`;";
            $test = $dbc->query($query);

			while($tab = mysqli_fetch_row($test)) {
				echo "
                    $tab[0] $tab[1] $tab[2] $tab[3] <br>
                    ";
			}
			$dbc->close();
		?>
        <br>
        <br>
        <form action="pacjent.php" method="post">
            <span>podaj id:</span><br>
            <input type="number" name="numer">
            <input type="submit" name="wyslij" value="Pokaż szczegóły">

        </form>
    </div>
    <div class="prawy">
        <h2>KARTA PACJENTA</h2>
        <p>Nie wybrano pacjenta</p>
    </div>
    <div class="stopka">
        <p>utworzone przez: Hubert Zelichowski</p>
        <a href="kwerendy.txt">Kwerendy do pobrania</a>
    </div>
</body>
</html>