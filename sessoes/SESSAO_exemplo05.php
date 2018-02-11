<?php

require_once("config.php"); //session start

echo session_save_path(); //exibe no navegar o kocal que a sessao esta sendo salva

echo"<br>";

var_dump(session_status());

echo"<br>";

switch (session_status()) {
	case PHP_SESSION_DISABLED:
	echo "as sessões estiverem desabilitadas";
	break;

	case PHP_SESSION_NONE:
	echo "as sessões estiverem habilitadas, mas nenhuma existir";
	break;

	case PHP_SESSION_ACTIVE:
	echo "as sessões estiverem habilitadas, e uma existir";
	break;
}


?>