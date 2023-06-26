<!DOCTYPE html>
<html>
<head>
  <title>Signup Page</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/signuppage.css">
</head>
<body>
  <div class="container">
    <h1>Signup Page</h1>
    <form method="POST" action="signupaction.php" enctype="multipart/form-data">
      <div class="form-group">
        <label for="name">Name</label>
        <input type="text" class="form-control" id="name" name="name" required>
      </div>
      <div class="form-group">
        <label for="email">Email</label>
        <input type="email" class="form-control" id="email" name="email" required>
      </div>
      <div class="form-group">
        <label for="password">Password</label>
        <input type="password" class="form-control" id="password" name="password" required>
      </div>
      <div class="form-group">
        <label for="image">Profile Image</label>
        <input type="file" class="form-control-file" id="image" name="image" required>
      </div>
      <div class="form-group">
        <label>Gender</label><br>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="gender" id="male" value="male" required>
          <label class="form-check-label" for="male">Male</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="gender" id="female" value="female" required>
          <label class="form-check-label" for="female">Female</label>
        </div>
      </div>
      <div class="form-group">
        <label>Do you want to be:</label><br>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="role" id="role" value="user" required>
          <label class="form-check-label" for="male">User</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="role" id="role" value="Admin user" required>
          <label class="form-check-label" for="female">Admin User</label>
        </div>
      </div>
    
      <button type="submit" class="btn btn-primary">Signup</button>
    </form>
  </div>
</body>
</html>