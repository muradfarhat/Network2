<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <title>Network2</title>
</head>
<body>
    <?php
    echo '
    <div class="hero">
        <nav>
            <img src="assets/image/214ddf4a-5242-488c-8ecd-159608504df6.jpg" alt="" class="logo">
            <ul>
                <li><a href="index.html">Home</a></li>
                <li><a href="system.php">System Group</a></li>
                <li><a href="ip.php">IP Group</a></li>
                <li><a href="tcp.php">TCP Group</a></li>
            </ul>
        </nav>';
$ip= "127.0.0.1";
print("<br>(ARP)IPNetToMedia table<br>");
$index = snmp2_walk($ip, "public", ".1.3.6.1.2.1.4.22.1.2");
echo("<br>");
$mac = snmp2_walk($ip, "public", ".1.3.6.1.2.1.4.22.1.3");
$ip_address = snmp2_walk($ip, "public", ".1.3.6.1.2.1.4.22.1.4");

$i =0;
echo"<table class='table table-hover'>
<thead class='thead-dark'><tr> <th > Index </th><th> Mac </th> <th > IP </th><th> type </th>  </tr></thead>";
foreach ($index as $k=>$val) {
    echo "<tr> <td> $i </td><td> $index[$i] </td> <td> $mac[$i] </td><td> $ip_address[$i] </td>  </tr>";
    $i++;
}
// print("<br>(ARP)IP ADDR table<br>");

$Ent = snmp2_walk($ip, "public", ".1.3.6.1.2.1.4.20.1.1");
echo("<br>");
$EntIf = snmp2_walk($ip, "public", ".1.3.6.1.2.1.4.20.1.2");
$Mask = snmp2_walk($ip, "public", ".1.3.6.1.2.1.4.20.1.3");
$Broadcast = snmp2_walk($ip, "public", ".1.3.6.1.2.1.4.20.1.4");
$MaxSize = snmp2_walk($ip, "public", ".1.3.6.1.2.1.4.20.1.5");


$i =0;
// echo("(ARP)IP ADDR table");
echo"<table class='table table-hover'>
<thead class='thead-dark'><tr><th > Index </th> <th > Entry Address </th><th> Entry Interface </th> <th > Subnet Mask </th><th> Entry Broadcast </th><th> Max Size </th>  </tr></thead>";
foreach ($Ent as $k=>$val) {
    echo "<tr> <td>$i</td> <td>$Ent[$i]</td> <td>$EntIf[$i]</td> <td>$Mask[$i]</td> <td>$Broadcast[$i]</td> <td>$MaxSize[$i]</td> </tr>";
    $i++;
}
?>