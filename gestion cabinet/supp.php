<?php
mysql_connect("localhost","root","");
mysql_select_db("BDBenghorbelaziz");
$mat=$_POST["mat"];
$req="select * from patient where Mat = '$mat';";
$res=mysql_query($req);
if(mysql_num_rows($res)==0) echo "matricule inexistante";
else{
    $req="delete from patient where Mat = '$mat';";
    $res=mysql_query($req);
    if (mysql_affected_rows()>0) echo "suppression reussite";
}
?>