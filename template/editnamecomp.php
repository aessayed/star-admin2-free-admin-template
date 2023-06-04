<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="POST" action="editnamecompaction.php">
  <label for="name" class="form-label">Email address</label>
  <?php $id=$_GET['id'] ?>
  <input type="text" name="id" class="form-control" id="name" hidden placeholder="company" value="<?php echo $id; ?>">
    
  <input type="text" name="companyname" class="form-control" id="name" placeholder="company">
</div>

      
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" value="Submit" class="btn btn-primary">Submit</button>
      </div>
    </form>
</body>
</html>