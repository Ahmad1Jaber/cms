<div class="col">
<ul class="nav nav-tabs">
  <li class="nav-item">
    <a class="nav-link" href="index.php">Pending</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="resolved.php">Resolved</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="dismissed.php">Dismissed</a>
  </li>
  <li class="nav-item">
    <a class="nav-link active" href="users.php">Users</a>
  </li>
</ul>
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Username</th>
      <th scope="col">Phone Number</th>
      <th scope="col">Role</th>
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
  $sql="SELECT * FROM users";
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

  $sql = " SELECT * FROM users ORDER BY roleID DESC LIMIT " . $this_page_first_result . "," .  $results_per_page ;
  
  //Query selected statement  
  $result = mysqli_query($conn , $sql);
  if (mysqli_num_rows($result) > 0) {
      
    // Loop through output data of each row
    while($row = mysqli_fetch_array($result)) {

      echo "<tr>";
      echo "<th scope=\"row\">$count</th>";
      echo "<td>".$row["first_name"]." ".$row["last_name"]. "</td>";
      echo "<td>".$row["username"]."</td>";
      echo "<td>".$row["phone_number"]."</td>";
      if($row["roleID"]==1){echo "<td><span class=\"badge badge-info\">User</span></td>";}elseif($row["roleID"]==2){echo "<td><span class=\"badge badge-warning\">Admin</span></td>";}

      $count=$count+1;

    ?>
      <td> 
      <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal<?php echo $row["id"];?>" <?php if($_SESSION['userid']==$row['id']){echo "disabled";}?> >
 View
</button>
<!-- Modal -->
<div class="modal fade" id="exampleModal<?php echo $row["id"];?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"><?php echo $row["first_name"]." ".$row["last_name"];?></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
      <div class="row">
        <div class="col">
        <form action="app/user.php?id=<?php echo $row["id"]; ?>" method="POST">
        <div class="form-group mt-2">
                <label for="subject">Change user role:</label>
                <select class="form-control" name="role" id="role">
                  <option value="1" <?php if($row["roleID"]==1){echo "disabled selected ";}?>>User</option>
                  <option value="2" <?php if($row["roleID"]==2){echo "disabled selected ";}?>>Admin</option>
                </select>
                </div>
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
      echo '<li class="page-item"><a class="page-link" href="users.php?page=' . $page . '">' . $page . '</a></li> ';
    }
    ?>
  </ul>
</nav>
</div>