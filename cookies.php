<?php
$data = array("company" => "Faria Miguel");

setcookie("COOKIE-S-NAME", json_encode($data), time() + 3600);

echo "Cookie created successfully.";
