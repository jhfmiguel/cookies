<?php
if(isset($_COOKIE["COOKIE-S-NAME"])){
    $obj = json_decode($_COOKIE["COOKIE-S-NAME"]);
    echo $obj->company;
}
