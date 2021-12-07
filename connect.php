<_php

$conn=ssh2_connect('db.gyarab.cz',22);
ssh2_auth_password($conn,'dk-313','GyArab14');

$tunnel = ssh2_tunnel($conn, 'localhost', 3306);
$mysqli=new mysqli('localhost', 'dk-313', 'GyArab14', 'dk-313', 3306, $tunnel);
$SQL=;
$result=$mysqli->query('select * from adresar');



