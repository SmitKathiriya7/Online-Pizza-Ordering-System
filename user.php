<?php
 @include 'config.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User data</title>
</head>
<body>
    <h1>User Data</h1>
    <table border="1px" style="width:600px; line-height:40px;">
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Email</th>
            </tr>
        </thead>
        <tbody>
            <?php
        $query = "SELECT * FROM `user_form`;";
  
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
        </tbody>
    </table>
</body>
</html>