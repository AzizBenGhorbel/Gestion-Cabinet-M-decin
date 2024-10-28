<?php
mysql_connect("localhost","root","");
mysql_select_db("BDBenghorbelaziz");
$req="select Day(DateCons) , sum(Honoraire) from consultation where Month(DateCons) = Month(Now()) group by (Day(DateCons)) ;";
$res=mysql_query($req);
echo "<h1>le total des honoraires du mois en cours par journée</h1>";
echo "<table border = 2><tr><th>journée</th><th>honoraire</th></tr>";
while($e=mysql_fetch_array($res)){
    echo "<tr><td>$e[0]</td><td>$e[1]</td>";
}
?>