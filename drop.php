<?php
$conn = pg_connect(getenv("DATABASE_URL"));
if($conn) {echo "connected";} else {echo "not connected";}
$query = 'DROP TABLE users';
$result = pg_query($conn,$query);
if(!$result){
    echo "Table drop failed";
}
?>
