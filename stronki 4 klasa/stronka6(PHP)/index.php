<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Lista znajomych</title>
</head>
<body>
    <div class="baner">
        <h1>Portal Społecznościowy - moje konto</h1>
    </div>
    <div class="glowny">
        <h2>Moje zainteresowania</h2>
        <ol>
            <li>muzyka</li>
            <li>film</li>
            <li>komputery</li>
        </ol>
        <h2>moi znajomi</h2>
        <?php
        $dbc = new mysqli ('localhost', 'root', '', 'dane');
        
        $query="SELECT imie, nazwisko, opis, zdjecie FROM osoby WHERE Hobby_id = 1 OR Hobby_id = 2 OR Hobby_id = 6;";

        if ($result = $dbc->query($query)){

            while($row = $result->fetch_array()){
            echo "
            <div class='zdjecie'>
			    <img src='$row[3]' alt='przyjaciel' />
			</div>
			<div class='opis'>
			    <h3>$row[0] $row[1]</h3>
			    <p>Ostatni wpis: $row[2]</p>
			</div>
			<div class='linia'>
			    <hr>
			</div>
            ";
            }
        }

        $dbc->close();
        ?>
    </div>
    <div class="stopka1">
        Stronę wykonał: Hubert Żelichowski
    </div>
    <div class="stopka2">
        <a href="mailto:hzelichowskii@gmail.com">napisz do mnie</a>
    </div>
</body>
</html>