














<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./sta.css">
  <link rel="stylesheet" href="./ta.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <title>page</title>
</head>

<body>
<div class="form-container">
    <h2 class="heading">Sign Up</h2>

    <div class="input-fields">
      <form action="don.php" method="POST">
        <div id="K" class="single-field">
          <label>Your Name</label>
          <input name="YourName" class="form-control" type="text" required />
        </div>

        <div id="k1" class="single-field">
          <label>Email</label>
          <input name="Email" class="form-control" type="email" required />

        </div>
        <div id="k2" class="single-field">
          <label>Phone Number</label>
          <input name="PhoneNumber" class="form-control" type="number" required />

        </div>
        <div id="k3" class="single-field">
          <label>Password</label>
          <input type="Password" name="Password" class="form-control" required />

        </div>

        
        <div class="text">

          <input type="checkbox" id="a" style="width: 50px;" />

          <label for="a"> I agree to the terms and conditions.</label>
        </div>
        <div id="btn" class="single">
          <label></label>
          <input class="auth-btn" type="submit" class="form-control" value="Sign Up"  />

        </div>
        <div class="text">
          <span>
            Already Have an Account? Login <a href="./app.php">Here</a>
          </span>
        </div>
      </form>
    </div>
  </div>

    
</body>

</html>
