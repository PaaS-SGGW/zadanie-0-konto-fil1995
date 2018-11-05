<?php

echo "hello!<br>";
$conn = pg_connect(getenv("DATABASE_URL"));
if($conn) {echo "connected";} else {echo "not connected";}


?>
