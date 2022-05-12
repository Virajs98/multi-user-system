<?php
session_start();
include "../master/db_conn.php";
?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>home</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    </head>

    <body>
      <div class="container d-flex justify-content-center align-items-center"
      style="min-height: 100vh">
      		
      		<!-- FORE USERS -->
      		<div class="card" style="width: 18rem;">
			  <img src="../assets/images/others/user-default.png" 
			       class="card-img-top" 
			       alt="admin image">
			  <div class="card-body text-center">
			    <h5 class="card-title">
			    	<?=$_SESSION['name']?>
			    </h5>
			    <a href="../logout.php" class="btn btn-dark">Logout</a>
			  </div>
			</div>
      	
      </div>
</body>

    </html>
