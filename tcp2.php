<?php

$i=0;
$ip="127.0.0.1:161";


$conState=snmp2_walk($ip,"public",".1.3.6.1.2.1.6.13.1.1");
$conLocAddress=snmp2_walk($ip,"public",".1.3.6.1.2.1.6.13.1.2");
$conLocPort=snmp2_walk($ip,"public",".1.3.6.1.2.1.6.13.1.3");
$conRemoteAdd=snmp2_walk($ip,"public",".1.3.6.1.2.1.6.13.1.4");
$conRemotePort=snmp2_walk($ip,"public",".1.3.6.1.2.1.6.13.1.5");

foreach($conState as $s=>$h){

    echo $conState[$i]."  |  ";
    echo $conLocAddress[$i]."  |  ";
    echo $conLocPort[$i]."  |  ";
    echo $conRemoteAdd[$i]."  |  ";
    echo $conRemotePort[$i]."\n";
 $i++;
}
?>