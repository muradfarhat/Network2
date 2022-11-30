<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <title>Network2</title>
</head>
<body> -->
    <?php
    // require('index.html');
    // echo '
    // <div class="hero">
    //     <nav>
    //         <img src="assets/image/214ddf4a-5242-488c-8ecd-159608504df6.jpg" alt="" class="logo">
    //         <ul>
    //             <li><a href="index.html">Home</a></li>
    //             <li><a href="system.php">System Group</a></li>
    //             <li><a href="ip.php">IP Group</a></li>
    //             <li><a href="tcp.php">TCP Group</a></li>
    //         </ul>
    //     </nav>';
        echo '
        <a href = "index.html" style = "color:red">To Home</a>
        ';
        $i=0;
        $ip= "127.0.0.1";
        $tcp_con_state= snmp2_walk($ip,"public",".1.3.6.1.2.1.6.13.1.1");
        $conn_local_addrs= snmp2_walk($ip,"public",".1.3.6.1.2.1.6.13.1.2");
        $conn_local_port= snmp2_walk($ip,"public",".1.3.6.1.2.1.6.13.1.3");
        $conn_remote_addrs= snmp2_walk($ip,"public",".1.3.6.1.2.1.6.13.1.4");
        $conn_remote_port= snmp2_walk($ip,"public",".1.3.6.1.2.1.6.13.1.5");
        echo "<div class='container'><table class='table table-hover' style='width: 100%'>";
        echo" <thead class='thead-dark'><tr><th>Index</th><th>Connection state</th><th>Connection local address</th><th>Connection local port</th><th>Connection remote address</th><th>Connection remote port</th></tr></thead><tbody>";
        foreach($tcp_con_state as $obj){
            echo "<tr><td>".$i."</td><td>".$obj."</td><td>".$conn_local_addrs[$i]."</td><td>".$conn_local_port[$i]."</td><td>".$conn_remote_addrs[$i]."</td><td>".$conn_remote_port[$i].
                "</td></tr>";
        $i++;
        }
        echo"</tbody>";
    ?>
    

<!-- </body>
</html> -->