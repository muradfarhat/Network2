<?php

$ip="127.0.0.1:161";

if(isset($_POST['T3'])) {
    snmp2_set($ip,"public",".1.3.6.1.2.1.1.4.0","s",$_POST['T3']);
}
if(isset($_POST['T2'])) {
    snmp2_set($ip,"public",".1.3.6.1.2.1.1.6.0","s",$_POST['T2']);   
}

echo"Name  :";
$a = snmp2_get($ip, "public", ".1.3.6.1.2.1.1.5.0");
echo $a."\n";

echo"Description  :";
$b = snmp2_get($ip, "public", ".1.3.6.1.2.1.1.1.0");
echo $b."\n";

echo"Time  :";
$c = snmp2_get($ip, "public", ".1.3.6.1.2.1.1.3.0");
echo $c."\n";

echo"Oid  :";
$d = snmp2_get($ip, "public", ".1.3.6.1.2.1.1.2.0");
echo $d."\n";

echo"Contact  :";
$e = snmp2_get($ip, "public", ".1.3.6.1.2.1.1.4.0");
echo $e."\n";

echo"Location  :";
$f = snmp2_get($ip, "public", ".1.3.6.1.2.1.1.6.0");
echo $f."\n";

echo"Services  :";
$g = snmp2_get($ip, "public", ".1.3.6.1.2.1.1.7.0");
echo $g."\n";
?>