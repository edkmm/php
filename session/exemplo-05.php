<?php

require_once("config.php");

echo session_save_path();

echo "<br>";

var_dump(session_status());

echo "<br>";

switch(session_start()) {
        case PHP_SESSION_DISABLED:
        echo " se as sessões estiverem desabilitadas";
        break;

        case PHP_SESSION_NONE:
        echo " se as sessões estiverem habilitadas, mas nenhuma existir";
        break;

        case PHP_SESSION_ACTIVE:
        echo " se as sessões estiverem habilitades, e uma existir";
        break;
}

?>