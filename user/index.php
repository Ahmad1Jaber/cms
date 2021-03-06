<?php $title = "Home Page";
require_once "includes/header.php";
require_once "../app/conn.php";
require_once "app/redirect.php";
require_once "includes/nav.php";

echo "<div class=\"container\">";
echo "<div class=\"row\">";


require_once "modules/status.php";
require_once "modules/services.php";

?>


      


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

<?php

require_once "includes/footer.php"; 

?>
   