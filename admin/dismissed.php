<?php $title = "Admin Dashboard | Dismissed";
require_once "includes/header.php";
require_once "../app/conn.php";
require_once "app/redirect.php";
require_once "includes/nav.php";
?>
<div class="container">
<div class="row ">
<?php
 require_once "modules/status.php";
 require_once "modules/dismissed.php";
?>

</div>
</div>


<?php

require_once "includes/footer.php"; 

?>
   