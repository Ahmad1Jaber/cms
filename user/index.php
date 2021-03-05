<?php $title = "Home Page";
require_once "includes/header.php";
require_once "../app/conn.php";

?>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
<a class="navbar-brand" href="index.php">
    <img src="../assets/logo.png" width="50" height="50" alt="ABC Logo">
  </a>
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
    <div class="row">

      <div class="col">
  <!-- In here add te card properties-->

        <div class="card">
          <h5 class="card-header">Complaints Submitted</h5>
          <br>
          <img class="card-img-top smallimg" src="../assets/SVG/character1.svg" alt="No Complaints" height="350in">
          <!-- <div class="card-body">
            <h5 class="card-title">Special title treatment</h5>
            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
          </div>
          <hr>
          <div class="card-body">
            <h5 class="card-title">Special title treatment</h5>
            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
          </div> -->
          <br>

        </div>
      </div>
    
    <div class="col col-md-auto">
      <div class="card" style="width: 18rem;">
        <div class="card-body">
          <!-- In here add te card properties-->
          hellow there zaina
        </div>
      </div>
    </div>
    
  </div>
</div>


<?php require_once "includes/footer.php"; ?>
   