<?php require_once("connection.php");?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Products - K's Delicious </title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="container">
	<div class="row">
		<div class="col-sm-2"></div>
		<div class="col-sm-8 form-container">
				<h1>Products</h1>
				<hr>
				<a href="pro.php" class="btn btn-primary" style="float:right;">Create New &amp;lt;/a>
				<table class="table">
					<tr>
						<th>Image</th>
						<th>Title</th>
						<th>Price</th>
					</tr>
				<?php 
					 $sql="SELECT * from products order by pid DESC"; 
         $stmt = $db->prepare($sql);
           $stmt->execute();
           $rows=$stmt->fetchAll();
           foreach ($rows as $row) {
           echo '<tr>
              <td><img src="uploads/'.$row['image'].'" height="100"></td>
               <td>'.$row['title'].'</td>
               <td>'.$row['price'].' INR</td>
           </tr>';
           }
				?> 
		</table> 
		</div>
		<div class="col-sm-2"></div>
	</div>
</div>
</body>
</html>