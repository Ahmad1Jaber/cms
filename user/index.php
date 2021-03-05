<?php $title = "Home Page";
require_once "includes/header.php";
require_once "../app/conn.php";

?>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
<a href="index.php" class="navbar-brand">ABC Complaint System</a>
<button class="navbar-toggler" data-toggle="collapse" data-target="#navbarMenue">
<span class="navbar-toggler-icon"></span>
</button>
<div class="collapse navbar-collapse" id="navbarMenue">
<ul class="navbar-nav mr-auto">
<li class="nav-item"><a href="index.php" class="nav-link">Home</a></li>
<li class="nav-item"><a href="index.php" class="nav-link">Create</a></li>
</ul>
<ul class="navbar-nav ml-auto">
    <li class="nav-item">
    <a class="nav-link" href="app/logout.inc.php"> Logout <i class="fa fa-arrow-circle-right" aria-hidden="true"></i></a>
    </li>
    </ul> 
</div>
</nav>

<br><br>
<div class="container">
<div class="card mx-auto">
  <div class="card-body">
    This is some text within a card body.
  </div>
</div>

<div class="card mx-auto">
  <div class="card-body">
    This is some text within a card body.
  </div>
</div>

<div class="card mx-auto">
  <div class="card-body">
    This is some text within a card body.
  </div>
</div>

</div>


<?php require_once "includes/header.php"; ?>
   