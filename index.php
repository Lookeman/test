<?php
echo "<h1>Hello OpenShift! 2017-10-17<h1>";
echo "Kriting:keribo";
echo getenv("GREETINGS");
echo "<br>";

echo "Container Name: ";
echo gethostname();
echo "<br>";
echo "Client IP: ";
echo $_SERVER["REMOTE_ADDR"];
?>
