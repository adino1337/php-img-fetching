<?php 
// Include the database configuration file  
$mysqli = require __DIR__ . "/database.php";
 
// Get image data from database 
$result = $mysqli->query("SELECT img FROM img WHERE id=2"); 
    if($result->num_rows > 0){ 
    echo '<div class="gallery">';?>
    <?php while($row = $result->fetch_assoc()){ ?> 
        <img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['img']); ?>" /> 
    <?php } ?> <?php
    echo "</div>"; 
    }else{
        echo "<p class='status error'>Image(s) not found...</p> ";     
}

?>