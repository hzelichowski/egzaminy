<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <title>stronka</title>
    <link rel="stylesheet" href="style.css">

</head>
<body>
    <div id="baner">
        <h2>Wędkuj z nami</h2>
    </div>

    <div class="clr">&nbsp;</div>

    <div id="lewy"><img src="ryba2.jpg" alt="szczupak"></div>
    <div id="prawy">
        
        
        <h3>Ryby spokojnego żeru (białe)</h3>
        
        <?php
        $mysql_server = 'localhost';
        $mysql_user = 'root';
        $mysql_pass = '';
        $mysql_db = 'wedkowanie';

        $dbc = new mysqli ($mysql_server, $mysql_user, $mysql_pass, $mysql_db);

        //if($dbc->$conect_error){
        //    die("<script type='text/javascript'>alert('".$connect_error."');</script>");
        //}else{
        //    echo"<script type='text/javascript'>alert('polaczenie dziala');</script>";
        //}

        
        $query="SELECT id, nazwa, wystepowanie FROM ryby WHERE styl_zycia = 2;";

        if ($result = $dbc->query($query)){

            while($row = $result->fetch_array()){

                echo $row['id'].".".$row['nazwa'].", wystepuje w : ".$row['wystepowanie']."</br>";

            }
        }else {
            echo"błąd zapytania";
        }

        $dbc->close();

        ?>
       
        <ol>
            <li><a target="_blank" href="https://wedkuje.pl/">Odwiedź także</a></li>

            <li><a target="_blank" href="http://www.pzw.org.pl/">Polski Związek Wędkarski</a></li>
        </ol>
    </div>

    <div class="clr">&nbsp;</div>

    <div id="stopka">
        <p>Stronę wykonał: PESEL</p>
    </div>
    <script src="skrypt.js"> 
    </script>
</body>
</html>