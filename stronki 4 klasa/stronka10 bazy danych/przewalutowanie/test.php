<html>
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
if(isset($_POST["wartosc"]))
{
 $wartosc =$_POST["wartosc"];
 $euro = 3.8;
 if($_POST["waluta"]==1)
   {
   $wynik = $wartosc/$euro;
   $wynik = $wynik." eur";
   }
 else
   {
   $wynik = $wartosc*$euro;
   $wynik = $wynik." pln";
   }
 echo "<p><p>".$wynik;

}
?>
</html>