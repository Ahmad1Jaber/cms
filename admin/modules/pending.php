<div class="col">
<ul class="nav nav-tabs">
  <li class="nav-item">
    <a class="nav-link active" href="index.php">Pending</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="resolved.php">Resolved</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="dismissed.php">Dismissed</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="users.php">Users</a>
  </li>
</ul>
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Subject</th>
      <th scope="col">location</th>
      <th scope="col">Date</th>
      <th scope="col">Priority</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>

  <?php
  //Select pending complaints from the database
  require "../app/conn.php";
    //-----------Pagination Start----------//
  // define how many results you want per page
  $results_per_page = 10;
  // find out the number of results stored in database
  $sql="SELECT * FROM complaint WHERE statusID = '1'";
  $result = mysqli_query($conn, $sql);
  $number_of_results = mysqli_num_rows($result);
  $number_of_pages = ceil($number_of_results/$results_per_page);
  // determine which page number visitor is currently on
  if (!isset($_GET['page'])) {
    $page = 1;
    $count=1;
  } else {
    $page = $_GET['page'];
    if($page==1){
    $count=1;
  }else{
    $count=(($page*10)-10)+1;
    }
    }
  // determine the sql LIMIT starting number for the results on the displaying page
  $this_page_first_result = ($page-1)*$results_per_page;
//-----------Pagination End----------//

  $sql = " SELECT * FROM complaint INNER JOIN users ON complaint.userID = users.id 
  INNER JOIN location ON complaint.locationID = location.id
  INNER JOIN service ON complaint.serviceID = service.id
  where statusID = '1' ORDER BY complaint.priority DESC, complaint.c_id DESC LIMIT " . $this_page_first_result . "," .  $results_per_page ;
  //Query selected statement
  $result = mysqli_query($conn , $sql);
  if (mysqli_num_rows($result) > 0) {

      // Loop through output data of each row
      while($row = mysqli_fetch_array($result)) {
        
      echo "<tr>";
      echo "<th scope=\"row\">$count</th>";
      echo "<td>".$row["first_name"]." ".$row["last_name"]. "</td>";
      echo "<td>".$row["subject"]."</td>";
      echo "<td>".$row["location"]."</td>";
      echo "<td>".$row["date"]."</td>";
      if($row["priority"]==1){echo "<td><span class=\"badge badge-info\">Low</span></td>";}elseif($row["priority"]==2){echo "<td><span class=\"badge badge-warning\">Medium</span></td>";}elseif($row["priority"]==3){echo "<td><span class=\"badge badge-danger\">High</span></td>";}
      $count=$count+1;

    ?>
      <td> 
      <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal<?php echo $row["id"];?>">
 View
</button>
<!-- Modal -->
<div class="modal fade bd-example-modal-lg" id="exampleModal<?php echo $row["id"];?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"><?php echo $row["subject"];?></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
        <h4>Customer Information</h4>
        <hr>
        <div class="row">
        <div class="col">
        <label for="name">Name:</label>
        <input type="text" class="form-control form-control-lg" name="name" id="name" placeholder="Subject" value="<?php echo $row["first_name"]." ".$row["last_name"] ?>" disabled >
        </div>
        <div class="col">
        <label for="date">Date:</label>
        <input type="text" class="form-control form-control-lg" name="date" id="date" placeholder="Subject" value="<?php echo $row["date"]; ?>" disabled >
        </div>
        
        </div>

        <div class="row mt-2 mb-3">
        <div class="col">
        <label for="phone">Phone Number:</label>
        <input type="text" class="form-control form-control-lg" name="phone" id="phone" placeholder="Subject" value="<?php echo $row["phone_number"]; ?>" disabled >
        </div>
        <div class="col">
        <label for="location">Location:</label>
        <input type="text" class="form-control form-control-lg" name="location" id="location" placeholder="Subject" value="<?php echo $row["location"]; ?>" disabled >
        </div>
        </div>
        <hr>

        <h4>Complaint Information</h4>
        <hr>
        <div class="row mt-2">
            <div class="col">
            <label for="service">Service:</label>
            <input type="text" class="form-control form-control-lg" id="service" name="service" value="<?php echo $row["service"];?>" disabled>
            </div>
            <div class="col">
            <label for="desc">Service Description:</label>
            <textarea class="form-control" id="desc" name="desc" rows="3" disabled><?php echo $row["service_description"];?></textarea>
            </div>
        </div>

        <div class="row mt-2">
            <div class="col">
            <label for="description">Description of complaint:</label>
            <textarea class="form-control" id="description" name="description" rows="3" disabled><?php echo $row["description"];?></textarea>
            </div>
            <div class="col">
            <label for="action">Action Recommended:</label>
            <textarea class="form-control" id="action" name="action" rows="3" disabled><?php echo $row["action"];?></textarea>
            </div>
        </div>
        <hr>
        <h4>Action</h4>
        <hr>
        <form action="app/status.php?id=<?php echo $row["c_id"]; ?>" method="POST">
        <div class="form-group mt-2">
                <label for="subject">Status of complaint:</label>
                <select class="form-control" name="status" id="status">
                  <option value="1" <?php if($row["statusID"]==1){echo "disabled selected ";}?> >Pending</option>
                  <option value="2" <?php if($row["statusID"]==2){echo "disabled selected ";}?>>Resolved</option>
                  <option value="3"<?php if($row["statusID"]==3){echo "disabled selected ";}?> >Dismissed</option>
                </select>
                </div>
      
      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" name="update" id="update" class="btn btn-primary">Save changes</button>
      </div>
      </form>
    </div>
  </div>
</div>

      </td>
      </tr>
      <?php
} 
   }
    ?>

    </tbody>
</table>
<nav aria-label="Page navigation mb-3">
  <ul class="pagination justify-content-center">
    <?php 
    for ($page=1;$page<=$number_of_pages;$page++) {
      echo '<li class="page-item"><a class="page-link" href="index.php?page=' . $page . '">' . $page . '</a></li> ';
    }
    ?>
  </ul>
</nav>

</div>