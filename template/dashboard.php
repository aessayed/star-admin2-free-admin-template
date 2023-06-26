<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400&family=Quicksand:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">


</head>

<body>

<button type='button' class='btn btn-primary' data-bs-toggle='modal' data-bs-target='#exampleModal'>
    Add New Company
</button>
<div class='modal fade' id='exampleModal' tabindex='-1' aria-labelledby='exampleModalLabel' aria-hidden='true'>
    <div class='modal-dialog'>
        <div class='modal-content'>
            <div class='modal-header'>
                <h5 class='modal-title' id='exampleModalLabel'>New Company</h5>
                <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
            </div>
            <form method='POST' action='dashboardaction.php'>
                <div class='mb-3'>
                    <label for='name' class='form-label'>Enter company name:</label>
                    <input type='text' name='companyname' class='form-control' id='name' placeholder='company'>
                </div>
                <div class='modal-body'></div>
                <div class='modal-footer'>
                    <button type='button' class='btn btn-secondary' data-bs-dismiss='modal'>Close</button>
                    <button type='submit' value='Submit' class='btn btn-primary'>Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>



  <center>
    <h3>Available companies</h3>

  </center>
  <?php
  include('config.php');
  
  $result = mysqli_query($con, "SELECT * FROM company");
  while ($row = mysqli_fetch_array($result)) {
    echo "
            <center>
            <main>
             <div class='card mt-1' style='width: 18rem;'>
            
                <div class='card-body'>
                    <h5 class='card-title'>$row[name]
                    <a href='editnamecomp.php?id=$row[id]' style='display:flex;margin-left:4rem'> updated item</button></a> 
                    <a href='deletenamecomp.php? id=$row[id]' class='btn mt-1 btn-primary'>Delete</a>
                    </h5>
                    

                </div>
              </div>
              </main>
            <center>
            ";
  }
  ?>
  <?php 
  
  
  ?>

</body>

</html>