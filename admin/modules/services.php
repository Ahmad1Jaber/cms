<div class="col">
<div class="card mt-4" >
    <div class="card-body">
        <h5 class="card-title">Available Services</h5>
        <hr>
        <?php
            $sql = "SELECT * FROM service";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                // output data of each row
                while($row = $result->fetch_assoc()) {
                echo "<p class=\"text-muted\">";
                echo $row['service'];
                echo "</p>";  
                
                }
            } else {
                echo "<p class=\"text-muted\">";
                echo "There are no services available";
                echo "</p>";
            }
        ?>
    </div>
</div>
</div>
<br><br>
