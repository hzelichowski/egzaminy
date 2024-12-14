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
        <form action="pacjent.php">
            <span>podaj id:</span><br>
            <input type="number" name="numner" id="numer">
            <input type="button" name="wyslij" value="Pokaż szczegóły">

        </form>
    </div>
    <div class="prawy">
        <h2>KARTA PACJENTA</h2>
        <?php
			$dbc = new mysqli ('localhost', 'root', '', 'poradnia');


            if(!empty($_POST['wyslij'])) {
                $numer = $_POST['numer'];

                $query = "SELECT imie, nazwisko, leki_przepisane, opis FROM `pacjenci` WHERE id = $numer;";
                $test = $dbc->query($query);

                while($tab = mysqli_fetch_row($test)) {
                    echo "  
                        Imię i nazwisko: $tab[0] $tab[1] <br> <br>
                        Przepisane leki: $tab[2] <br><br>
                        Opis choroby: $tab[3] <br><br>
                        ";
                }
                $dbc->close();
            }
		?>
    </div>
    <div class="stopka">
        <p>utworzone przez: Hubert Zelichowski</p>
        <a href="kwerendy.txt">Kwerendy do pobrania</a>
    </div>
</body>
</html>