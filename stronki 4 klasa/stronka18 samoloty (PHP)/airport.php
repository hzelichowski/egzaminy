<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Odloty samolotów</title>
    <link rel="stylesheet" href="styl6.css">
</head>
<body>
    <div class="baner1">
        <h2>Odloty z lotniska</h2>
    </div>
    <div class="baner2">
        <img src="zad6.png" alt="">
    </div>
    <div class="glowny">
        <h4>tavela odlotów</h4>
		<table>
			<tr>
				<th>lp.</th>
				<th>numer rejsu</th>
				<th>czas</th>
				<th>kierunek</th>
				<th>status</th>
			</tr>
			<?php
			$conn = mysqli_connect('localhost', 'root', '', 'egzamin');
			$kw1 = "SELECT id, nr_rejsu, czas, kierunek, status_lotu FROM odloty ORDER BY czas DESC;";
			$query = mysqli_query($conn, $kw1);
			while($tab = mysqli_fetch_row($query)) {
				echo "<tr>
                        <td>$tab[0]</td>
                        <td>$tab[1]</td>
                        <td>$tab[2]</td>
                        <td>$tab[3]</td>
                        <td>$tab[4]</td>
                    </tr>";
			}
			mysqli_close($conn);
			?>
		</table>
    </div>
    <div class="stopka1"><a href="kw1.png">Pobierz obrac</a></div>
    <div class="stopka2">
        <?php
        if(isset($_COOKIE['cookie'])) {
            echo "<p><b>Miło nam, że nas znowu odwiedziłeś</b></p>";
        } else {
            setcookie("cookie", 1, TIME() + 3600);
            echo "<p><i>Dzień dobry! Sprawdź regulamin naszej strony</i></p>";
        }
        ?>
    </div>
    <div class="stopka3">
        Autor: Hubert Zelichowski
    </div>
</body>
</html>