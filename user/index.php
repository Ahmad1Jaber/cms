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
                
                <form action="app/complaint.php" method="post">
                
                <div class="form-group">
                <label for="subject">Subject:</label>
                <input type="text" class="form-control form-control-lg" name="subject" id="subject" placeholder="Subject" required>
                </div>

                <div class="form-group mt-2">
                <label for="subject">Priority:</label>
                <select class="form-control" name="priority" id="priority">
                  <option value="1">Low</option>
                  <option value="2">Medium</option>
                  <option value="3">High</option>
                </select>
                </div>

                <!----------------------------------->
                <!-- Service Select Option - Start -->
                <!----------------------------------->
                <div class="form-group mt-2">
                <label for="subject">Service:</label>
                <select class="form-control" name="service" id="service">
                  <option value="" disabled="disabled" selected>Choose the service</option>
                  <?php 
                   $sql = "SELECT * FROM service";
                   $result = $conn->query($sql);
       
                   if ($result->num_rows > 0) {
                       // output data of each row
                       while($row = $result->fetch_assoc()) {
                  ?>
                  <option value="<?php echo $row["id"]; ?>"><?php echo $row["service"]  ?></option>
                  <?php 
                       }
                   }
                  ?>
                </select>
                </div>
                <!----------------------------------->
                <!-- Service Select Option - End   -->
                <!----------------------------------->

                <!----------------------------------->
                <!-- Location Select Option - Start -->
                <!----------------------------------->
                <div class="form-group mt-2">
                <label for="subject">Location:</label>
                <select class="form-control" name="location" id="location">
                  <option value="" disabled="disabled" selected>Choose the location</option>
                  <?php 
                   $sql = "SELECT * FROM location";
                   $result = $conn->query($sql);
       
                   if ($result->num_rows > 0) {
                       // output data of each row
                       while($row = $result->fetch_assoc()) {
                  ?>
                  <option value="<?php echo $row["id"]; ?>"><?php echo $row["location"]  ?></option>
                  <?php 
                       }
                   }
                  ?>
                </select>
                </div>
                <!----------------------------------->
                <!-- Location Select Option - End   -->
                <!----------------------------------->
                
                <div class="form-group">
                  <label for="description">Description:</label>
                  <textarea class="form-control" id="description" name="description" rows="3"></textarea>
               </div>

               <div class="form-group">
                  <label for="action">Action:</label>
                  <textarea class="form-control" id="action" name="action" rows="3"></textarea>
               </div>

                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  <button type="submit" name="create" id="create" class="btn btn-primary">Create</button>
                </div>
                </form>
              </div>
            </div>
          </div>
          </h5>
      </div>

          <!-- <img class="card-img-top smallimg" src="../assets/SVG/character1.svg" alt="No Complaints" height="350in"> -->
          
<?php

    //Select statement and query for results 
    $user= $_SESSION["userid"];
    $sql = " SELECT * FROM complaint where userID = '$user' ORDER BY c_id DESC ";
    $result = $conn->query($sql);
    
    //Check if results returned
    if ($result->num_rows > 0) {

        // Loop output data of each row
        while($row = $result->fetch_assoc()) {
         echo "<div class=\"card-body\">";
         echo "<h5 class=\"card-title\">".$row["subject"]."</h5>";
         echo "<div class=\"row\">";
         echo "<div class=\"col ml-auto\">";
         echo "<p class=\"card-text text-secondary m\">".$row["description"]."</p>";
         echo "</div>";
         echo "<div class=\"col\">";
         echo "<p class=\"text-muted\">Date of creation: <span class=\"text-success\">".$row["date"]."</span></p>";
         if($row["statusID"]==1){
         echo "<p class=\"text-muted\">Status of the Complaint: <span class=\"text-warning\"><i class=\"fa fa-clock-o\" aria-hidden=\"true\"></i> Pending</span></p>"; 
         echo "</div>";
         echo "</div>";
         echo "</div>";
         echo "<hr>";
         }elseif($row["statusID"]==2){
          echo "<p class=\"text-muted\">Status of the Complaint: <span class=\"text-success\"><i class=\"fa fa-check-circle\" aria-hidden=\"true\"></i> Resolved</span></p>"; 
          echo "</div>";
          echo "</div>";
          echo "</div>";
          echo "<hr>";
         }elseif($row["statusID"]==3){
          echo "<p class=\"text-muted\">Status of the Complaint: <span class=\"text-danger\"><i class=\"fa fa-times\" aria-hidden=\"true\"></i> Dismissed</span></p>"; 
          echo "</div>";
          echo "</div>";
          echo "</div>";
          echo "<hr>";
         }
        }
    } else {
        echo "<img class=\"card-img-top smallimg mt-3\" src=\"../assets/SVG/character1.svg\" alt=\"No Complaints\" height=\"350in\">";
        
    }
?>
            

          
          <br>
      </div>    
  </div>
</div>

<?php

require_once "includes/footer.php"; 

?>
   