<?php
mysql_connect("localhost","root","");
mysql_select_db("BDBenghorbelaziz");
$req="select p.* from patient p , consultation c where p.Mat = c.Mat and Day(DateRDV)=Day(Now());";
$res=mysql_query($req);
$d=date("d-m-Y");
echo "<h1>les patients qui ont un rendez vous aujoud hui:".$d."</h1>";
echo "<table border=2><tr><th>Matricule</th><th>Nom</th><th>Prenom</th></tr>";
while ($e=mysql_fetch_array($res)){
    echo "<td>$e[0]</td><td>$e[1]</td><td>$e[2]</td>";
}
echo "</table>"
?>