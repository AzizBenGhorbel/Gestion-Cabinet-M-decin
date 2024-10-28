<?php
mysql_connect("localhost","root","");
mysql_select_db("BDBenghorbelaziz");
$mat=$_POST["mat"];
$n=$_POST["n"];
$p=$_POST["p"];
$req="select * from patient where Mat = '$mat'; ";
$res=mysql_query($req);
if(mysql_num_rows($res)>0) echo "patient deja inscrit";
else {
    $req="insert into patient values ('$mat','$n','$p');";
    $res=mysql_query($req);
    if(mysql_affected_rows()>0) echo "enregistrement fait avec succes";
}
?>