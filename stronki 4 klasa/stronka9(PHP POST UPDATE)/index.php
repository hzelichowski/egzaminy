<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <!--
    SELECT miesiac, rok FROM zadania WHERE dataZadania = '2020-07-01';
    SELECT dataZadania, wpis FROM zadania WHERE miesiac = 'lipiec';
    -->
</head>
<body>
    <div class="baner">
        <img src="logo1.png" alt="Mój kalendarz" style="height:150px ;">
    </div>
    <div class="baner2">
        <h1>KALENDARZ</h1>
        <?php
        $dbc = new mysqli ('localhost', 'root', '', 'egzamin6');
        
        $query="SELECT miesiac, rok FROM zadania WHERE dataZadania = '2020-07-01';";

        if ($result = $dbc->query($query)){

            while($row = $result->fetch_array()){
            echo "<h3>
            miesiąc: $row[0], rok: $row[1]
            </h3>";
            }
        }

        $dbc->close();
        ?>
    </div>
    <div class="clr">&nbsp;</div>
    <div class="glowny">
        <?php
         
         
        $dbc = new mysqli ('localhost', 'root', '', 'egzamin6');
        
        $query="SELECT dataZadania, wpis FROM zadania WHERE miesiac = 'lipiec';";
        

        if ($result = $dbc->query($query)){

            while($row = $result->fetch_array()){
            echo "<div class='dzien'>
            <h5>$row[0]</h5><br>
            <p>$row[1]</p>
            
            </div>";
            }
        }
        

        $dbc->close();
        
        ?>

    </div>
    <div class="clr">&nbsp;</div>
    <div class="stopka">
        <form method="POST" action="index.php">
            <input type="text" name="wpis">
            <input type="submit" value="wyslij" name="wyslij">
        </form>
        <?php
        header("Refresh:0");
        if (isset($_POST['wyslij'])) {
            
            $wpis = $_POST['wpis'];
            $dbc2 = new mysqli ('localhost', 'root', '', 'egzamin6');
            $query2 = "UPDATE zadania SET wpis = '$wpis' WHERE dataZadania = '2020-07-13';";
            
            mysqli_query($dbc2, $query2);
            
            $dbc2->close();
        }
        
        ?>
    </div>
</body>
</html>