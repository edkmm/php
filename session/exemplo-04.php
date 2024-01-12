<?php

session_id('s3c1ae4constae2b7p0edu4j2p');

require_once("config.php");

session_regenerate_id();

echo session_id();

var_dump($_SESSION);

?>