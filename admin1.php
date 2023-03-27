<?php
 @include 'config.php';
  $query = "SELECT * FROM `admin_form`;"
  // FETCHING DATA FROM DATABASE
  $result = $conn->query($query);
  
    if ($result->num_rows > 0) 
    {
        // OUTPUT DATA OF EACH ROW
        while($row = $result->fetch_assoc())
        {
            echo '<tr>
           <td>'.$row['id'].'</td>
           <td>'.$row['name'].'</td>
            <td>'.$row['email'].'</td>
           </tr>';
        }
    } 
    else {
        echo "0 results";
    }
  
   $conn->close();
  
?>
