<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Rozgrywki futbolowe</title>
    <!-- SELECT zespol1, zespol2, wynik, data_rozgrywki FROM `rozgrywka` WHERE zespol1 = 'EVG'; -->
</head>
<body>
    <div class="baner">
        <h2>Swiatowe rozgrywki pilkarskie</h2>
        <img src="obraz1.jpg" alt="boisko">
    </div>
    <div class="mecze">
        <?php
        $dbc = new mysqli ('localhost', 'root', '', 'egzamin');
        
        $query="SELECT zespol1, zespol2, wynik, data_rozgrywki FROM `rozgrywka` WHERE zespol1 = 'EVG';";

        if ($result = $dbc->query($query)){

            while($row = $result->fetch_array()){
            echo "<div class='inf'> 
            <h3>$row[0] - $row[1]</h3><br>
            <h4>$row[2] </h4> <br>
            <p>$row[3]</p>
             
            <br> </div>";
            }
        }

        $dbc->close();
        ?>
        
    </div>
    <div class="clr">&nbsp;</div>
    <div class="glowny">
        <h2>Reprezentacja Polsk</h2>
    </div>
    <div class="lewy">
        <p>Podaj pozycję zawodników (1-bramkarze, 2-obrońcy, 3-pomocnicy, 4-napastnicy):</p>
        <form method="POST" action="index.php">
            <input type="number" name="zawodnik">
            <input type="submit">
        </form>
        <?php
        $dbc = new mysqli ('localhost', 'root', '', 'egzamin');
            
        echo "<ul>";
		if(!empty($_POST['zawodnik'])) {
			$zawodnik = $_POST['zawodnik'];
            $query="SELECT imie, nazwisko FROM zawodnik WHERE pozycja_id = $zawodnik;";
            if ($result = $dbc->query($query)){
                while($row = $result->fetch_array()){
                echo " <li>$row[0] $row[1]</li>";
                }
            }
		}
        echo "</ul>";
		$dbc->close();
		?>
        
    </div>
    <div class="prawy">
        <img src="zad1.png" alt="pilkarz" style="width: 150px;">
        <p>Autor: 2137420</p>
    </div>
</body>
</html>