<?php
echo "hello!<br>";
$conn = pg_connect(getenv("DATABASE_URL"));
if($conn) {echo "connected";} else {echo "not connected";}
$users = pg_query($conn, 'SELECT * FROM USERS');
$arr = pg_fetch_all($users);
echo "<br> lista userow:<br>";
foreach($arr as $item) {
  
    echo $item['id'] . "   ";
    echo $item['nick'] . "   ";
    echo $item['email'] . "   <br>";
}
?>
