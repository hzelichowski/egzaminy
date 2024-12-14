<?php
    $dbc = new mysqli ('localhost', 'root', '', 'wedkowanie');
        
	if(isset($_POST['wyslij'])) {
        $imie = $_POST['imie'];
        $nazwisko = $_POST['nazwisko'];
        $adres = $_POST['adres'];
        $query = "INSERT INTO `karty_wedkarskie` (imie, nazwisko, adres) VALUES ('$imie', '$nazwisko', '$adres');";
        $dbc->query($query);
        echo "dodane rekord";
	}
	$dbc->close();

    
?>

