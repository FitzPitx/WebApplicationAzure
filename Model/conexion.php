<?php
 try {
   $db = new PDO("sqlsrv:server = tcp:mysqlserverandrew2408.database.windows.net,1433; Database = notes", "andresAdmin", "Sandia2408$!");
   $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch (PDOException $e) {
   print("Error connecting to SQL Server.");
   die(print_r($e));
}