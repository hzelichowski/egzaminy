<?php
    $dbc = new mysqli ('localhost', 'root', '', 'baza');
        
	if(isset($_POST['wyslij'])) {
        $data = $_POST['data'];
        $osoby = $_POST['osoby'];
        $telefon = $_POST['telefon'];
        $query = "INSERT INTO rezerwacje VALUES (NULL, NULL, '$data', $osoby, '$telefon');";
        mysqli_query($dbc, $query);
        echo "Dodano rezerwcje do bazy";
	}
	$dbc->close();
?>