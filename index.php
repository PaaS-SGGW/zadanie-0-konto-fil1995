<?php
$conn = pg_connect(getenv("DATABASE_URL"));
if($conn) {echo "connected";} else {echo "not connected";}
$query = "INSERT INTO users (nick, email, pass) VALUES ('fm','fm@a.pl','akjsdakjdhakdhaskj')";
$result = pg_query($conn,$query);
if(!$result){
    echo "Insert failed:  ";
    echo pg_result_error($result);
}
?>
