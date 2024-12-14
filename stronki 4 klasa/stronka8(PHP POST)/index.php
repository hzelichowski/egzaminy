<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
    
    <!--SELECT imie, nazwisko FROM `zawodnik` WHERE pozycja_id = 4;-->
    <!--SELECT zespol, punkty, grupa FROM `liga` ORDER BY punkty DESC;-->
</head>
<body>
    <div class="baner">
        <h3>Reprezentacja polski w piłce nożnej</h3>
        <img src="obraz1.jpg" alt="Reprezentacja">
    </div>
    <div class="lewy">
        <form method="POST" action="index.php">
            <select name="zawodnik">
                <option value="1">Bramkarze</option>
                <option value="2">Obrońcy</option>
                <option value="3">Pomocnicy</option>
                <option value="4">Napastnicy</option>
            </select>
            <input type="submit" value="zobacz">
        </form>
        <img src="zad2.png" alt="pilka">
        <p>autor: Hubert Żelichowski</p>
    </div>
    <div class="prawy">
    <?php
        $dbc = new mysqli ('localhost', 'root', '', 'egzamin1');
            
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
    <div class="clr">&nbsp;</div>
    <div class="głowny">
        <h3>Liga mistrzow</h3>
    </div>
    <div class="liga">
        <!--skrypt2-->
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
    <div class="clr"></div>
    </div>
</body>
</html>