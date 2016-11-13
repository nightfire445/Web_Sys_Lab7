<?php


 $host        = "host=localhost";
 $port        = "port=5432";
 $credentials = "user=postgres password=toor";
// Connecting, selecting database
$dbconn = pg_connect("host=localhost port=5432")
    or die('Could not connect: ' . pg_last_error());

// Performing SQL query
$query = "IF EXISTS (SELECT 1 FROM pg_database WHERE datname = 'mydb') THEN
   RAISE NOTICE 'Database already exists'; 
ELSE
   PERFORM dblink_exec('dbname=' || current_database()  -- current db
                     , 'CREATE DATABASE mydb');
END IF";
$result = pg_query($query) or die('Query failed: ' . pg_last_error());


// Free resultset
pg_free_result($result);

// Closing connection
pg_close($dbconn);
?>