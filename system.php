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

        
if(isset($_POST['loc'])){
    snmp2_set("127.0.0.1","public",".1.3.6.1.2.1.1.6.0","s",$_POST['loc']);
}
if(isset($_POST['con'])){
    snmp2_set("127.0.0.1","public",".1.3.6.1.2.1.1.4.0","s",$_POST['con']);
}
$ip= "127.0.0.1";
$sys_group= snmp2_walk($ip,"public",".1.3.6.1.2.1.1");


echo "<div class='container'> <table class='table table-bordered'>
<thead class='thead-dark'><tr><th scope='col'>System description</th><th scope='col'>Object ID</th><th scope='col'>Up time</th><th scope='col'>Contact</th><th scope='col'>Name</th><th scope='col'>Location</th>
<th scope='col'>Services</th> </tr></thead>
<tr>";

foreach($sys_group as $val)
    echo "<td scope='row'>".$val."</td>";
echo "</tr>";

echo'
<div>
<h2 class = "text-warning">Change Location</h2>
<form action="system.php" method="post" class="form-inline">
    <label for="loc" >Location</label>
    <input  class="form-control w-50 p-3 " id="loc" name="loc" type="text" placeholder="Enter a new location">
    <input type="submit" class="btn btn-secondary mt-2" ></form>
<h2 class = "text-warning mt-3">Change Contact</h2>
<form action="system.php" method="post">
<label for="con">Connection</label>
    <input  class="form-control w-50 p-3" id="con" name="con" type="text" placeholder="Enter a new Contact">
    <input type="submit" class="btn btn-secondary mt-2" ></form></div>
    <br>' ;
    ?>
    

</body>
</html>