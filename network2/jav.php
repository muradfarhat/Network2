<?php


    if (isset($_REQUEST['T1']))
     {
      snmp2_set("localhost","public","1.3.6.1.2.1.1.4.0","s",$_REQUEST['T3']);
     }

    $ip = "127.0.0.1:161";
    $desc = snmp2_get("localhost", "public", "1.3.6.1.2.1.1.1.0");
    $id = snmp2_get("localhost", "public", "1.3.6.1.2.1.1.2.0");
    $time=snmp2_get("localhost", "public", "1.3.6.1.2.1.1.3.0");
    $name=snmp2_get($ip, "public", "1.3.6.1.2.1.1.5.0");
    $contact=snmp2_get("localhost", "public", "1.3.6.1.2.1.1.4.0");
    
    echo "System Gruop :";
    echo "\n";
    echo "IP: ".$ip."\n";
    echo "System Description: ".$desc."\n";
    echo "ID: : ".$id."\n";
    echo "System Up Time:".$time."\n";
    echo "System Location: ".$name."\n";
    echo "System Contact: ".$contact."\n";
    echo "--------------------------------------------------------------";
    echo "\n";
    echo "\n";
    echo "TCP Table :";
    echo "\n";
    
    
     
    $ip = "127.0.0.1:161";
    $obj = (snmp2_walk($ip,"public",".1.3.6.1.2.1.6.13"));
    foreach ($obj as $tcpConnectionTable) {}

  
            $num=snmp2_walk("localhost","public",".1.3.6.1.2.1.6.13.1");

            for($i = 0; $i < count($num)/2; $i++)
            {
               
               
                    echo $num[$i];
                    echo "        ";
                    echo $num[$i+count($num)/2];
                    echo "\n";
                

                
            }
            
?>