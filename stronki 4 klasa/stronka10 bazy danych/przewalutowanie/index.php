<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="test.php" method="post">
        <input type="text" name="wartosc">
        <p><p>Wybierz walutę na któr± ma być przeliczona wartosc
        <p><p>
        <select name="waluta">
            <option value="1" selected>Euro</option>
            <option value="2">PLN</option>
        </select>
        <input type="submit" value="przelicz">
    </form>
    <?php
        $dbc = new mysqli ('localhost', 'root', '', 'waluty');

        $query="SELECT * FROM `dane`";
        
        if ($result = $dbc->query($query)){

            while($row = $result->fetch_array()){
                // $nazwa = $row[1];
                // $cena = $row[2];
                
                echo " $row[1] $row[2]";
            }
            
        } 
        // if(isset($_POST["wartosc"]))
        // {
        //  $wartosc =$_POST["wartosc"];
        //  $euro = 3.8;
        //  if($_POST["waluta"]==1)
        //    {
        //    $wynik = $wartosc/$euro;
        //    $wynik = $wynik." eur";
        //    }
        //  else
        //    {
        //    $wynik = $wartosc*$euro;
        //    $wynik = $wynik." pln";
        //    }
        //  echo "<p><p>".$wynik;
       
        //}
    ?>
</body>
</html>