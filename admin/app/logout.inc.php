<?php
require_once "../../app/token.inc.php";
// End session and unset all session variables
session_start();
session_unset();
session_destroy();
$randSuccess = getToken(10);
header("Location: ../../index.php?logout=$randSuccess");
?>
