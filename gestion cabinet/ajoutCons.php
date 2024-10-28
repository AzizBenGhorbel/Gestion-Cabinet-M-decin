<?php
mysql_connect("localhost","root","");
mysql_select_db("BDBenghorbelaziz");
$mat=$_POST["mat"];
$d=$_POST["d"];
$prdv=$_POST["prdv"];
$h=$_POST["h"];
$da=date("Y-m-d");
$chd=(string)$da;
$js=(int)substr($chd,8,2)+(int)$prdv;
$ms=(int)substr($chd,5,2);
$as=(int)substr($chd,0,4);
if ($js > 31){
    $ms=$ms+1;
    $js=$js-31;}
if ($ms >12) {
    $as=$as+1;
    $ms=1;}
$js=(string)$js;
$ms=(string)$ms;
$as=(string)$as;
if ((int)$js < 10){$js="0".$js;}
if ((int)$ms < 10){$ms="0".$ms;}
$chd=$as."-".$ms."-".$js;
$req="select * from patient where Mat = '$mat'; ";
$res=mysql_query($req);
if(mysql_num_rows($res)==0) echo "Matricule inexistante";
else {
    $req="insert into consultation values('$mat',Now(),'$chd','$d','$h');";
    $res=mysql_query($req);
    if(mysql_affected_rows()>0) echo "enregistrement fait avec succes";
}

?>