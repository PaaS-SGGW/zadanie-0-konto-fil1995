<?php
error_reporting( E_ALL );
$conn = pg_connect(getenv("DATABASE_URL"));
if($conn) {echo "connected";} else {echo "not connected";}
$query = 'CREATE TABLE users (
    id          SERIAL PRIMARY KEY,
    nick        varchar(40) NOT NULL,
    email       varchar(40) NOT NULL,
    pass        varchar(40) NOT NULL );';
$result = pg_query($conn,$query);
if(!$result){
    echo "Table creation failed:  ";
    echo pg_result_error($result);
}
?>
