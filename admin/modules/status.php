<div class="col col-md-auto mb-4">
    <div class="card" >
        <div class="card-body">
            <h5 class="card-title">Status of the complaints</h5>
            <hr>

          <?php
            $sql = "SELECT * FROM complaint where statusID = '1'";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                // output data of each row
                $rowcount=mysqli_num_rows($result);
                echo "<p class=\"text-muted\">";
                echo "Pending complaints <span>(".$rowcount.")</span>";
                echo "</p>";  
                
                }else{
                  echo "<p class=\"text-muted\">";
                  echo "Pending complaints <span>(0)</span>";
                  echo "</p>";  
                }

                $sql = "SELECT * FROM complaint where statusID = '2'";
                $result = $conn->query($sql);
    
                if ($result->num_rows > 0) {
                    // output data of each row
                    $rowcount=mysqli_num_rows($result);
                    echo "<p class=\"text-muted\">";
                    echo "Resolved complaints <span>(".$rowcount.")</span>";
                    echo "</p>";  
                    
                    }else{
                      echo "<p class=\"text-muted\">";
                      echo "Resolved complaints <span>(0)</span>";
                      echo "</p>";  
                    }
                    
                    $sql = "SELECT * FROM complaint where statusID = '3'";
                    $result = $conn->query($sql);
        
                    if ($result->num_rows > 0) {
                        // output data of each row
                        $rowcount=mysqli_num_rows($result);
                        echo "<p class=\"text-muted\">";
                        echo "Dismissed complaints <span>(".$rowcount.")</span>";
                        echo "</p>";  
                        
                        }else{
                          echo "<p class=\"text-muted\">";
                          echo "Dismissed complaints <span>(0)</span>";
                          echo "</p>";  
                        }
        
                        
                    
        ?>


        </div>
      </div>
      
