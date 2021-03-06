<?php $title = "Home Page";
require_once "includes/header.php";
require_once "../app/conn.php";
require_once "app/redirect.php";

?>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
<a class="navbar-brand" href="index.php">
    <img src="../assets/logo.png" width="50" height="50" alt="ABC Logo">
  </a>
<button class="navbar-toggler" data-toggle="collapse" data-target="#navbarMenue">
<span class="navbar-toggler-icon"></span>
</button>
<div class="collapse navbar-collapse" id="navbarMenue">

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

    <div class="col col-md-auto mb-4">
      <div class="card" >
        <div class="card-body">
        <h5 class="card-title">Status of the complaints</h5>
        <hr>
          <!-- Resolved complaints-->
          <p class="text-muted">
            Resolved complaints <span>(2)</span>
          </p>
          <!-- Pending complaints-->
          <p class="text-muted">
            Pending complaints <span>(2)</span>
          </p>
          <!-- Dismissed complaints-->
          <p class="text-muted">
            Dismissed complaints <span>(2)</span>
          </p>
        </div>
      </div>
      


<?php require_once "modules/services.php";?>
      

    </div>
      <br><br>

      <div class="col">
        <!-- In here add te card properties-->

        <div class="card">
          <h5 class="card-header d-flex justify-content-between align-items-center">
          Complaints ticket
          <!-- Button trigger modal -->
          <button type="button" class="btn btn-secondary btn-sm " data-toggle="modal" data-target="#exampleModal">
            Create
          </button>

          <!-- Modal -->
          <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Nature of the complaint</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <!-- Enter the form data here  -->
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  <button type="button" class="btn btn-primary">Create</button>
                </div>
              </div>
            </div>
          </div>
          </h5>
          
      </div>
          <br>
          <img class="card-img-top smallimg" src="../assets/SVG/character1.svg" alt="No Complaints" height="350in">
          <!-- <hr>
          <div class="card-body">
            <h5 class="card-title">Special title treatment</h5>
            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
          </div>
          <hr> -->


          <br>

      </div>
    

    
  </div>
</div>

<?php require_once "includes/footer.php"; ?>
   