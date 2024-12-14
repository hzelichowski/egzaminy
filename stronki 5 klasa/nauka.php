<?php
	$dbc = new mysqli ('localhost', 'root', '', "nazwa_bazy"); //nazwa_bazy = nazwa bazy wpisana reszta zawsze taka sama
    $query = "SELECT * FROM tabela WHERE id = ;"; //kwerenda wysylana do bazy. na koncu moze byc zmienna np $numer
    $test = $dbc->query($query); //wyslanie kwerendy do bazy

    $dbc->close(); //zamknięcie bazy

    //TYPY ZADAN EGZAMIN


    //wyslanie z formularza do bazy danych            //isset lub !empty
    if(isset($_POST['wyslij'])) {  //wysylanie za pomoca POST formularz w inpucie ma miec name np <input type="submit" name="wyslij" value="guzik">
        $imie = $_POST['imie']; //pobieranie danych z formularza 
        $nazwisko = $_POST['nazwisko'];
        $query = "INSERT INTO `karty_wedkarskie` (imie, nazwisko) VALUES ('$imie', '$nazwisko');"; //wysylanie zapytania do bazy dodajace rekordy 
        $dbc->query($query); //zamkniecie bazy
        echo "dodano rekord"; // ewentualne wypisanie potwierdzenia dodania 
	}
    
    //wypisanie danych z bazy

    $dbc = new mysqli ('localhost', 'root', '', 'poradnia'); //nazwa_bazy = nazwa bazy wpisana reszta zawsze taka sama
    $query = "SELECT id, imie, nazwisko, choroba FROM `pacjenci`;"; //kwerenda wysylana do bazy. na koncu moze byc zmienna np $numer
    $test = $dbc->query($query); //wyslanie kwerendy do bazy

    while($tab = mysqli_fetch_row($test)) { //petla z odwolaniem do wyslanego zapytania wyżej
        echo "$tab[0] $tab[1] $tab[2] $tab[3] <br> "; //wypisanie danych z zapytania na stronie
    }
    $dbc->close(); //zamkniecie bazy



?>