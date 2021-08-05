<!DOCTYPE html>
<html lang="en">

<head>
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
    <h2 class="heading">LOG IN</h2>
    <div class="img">

    <img src="ticket.PNG" style="padding:initial;width:500px;height:300px; border-radius: 10px;">
  </div>


    <div class="input-fields">
      <form action="da.php" method="POST">
        <div id="K" class="single-field">
          <label>UserName</label>
          <input name="YourName" class="form-control" type="text" required />
          <div class="icon"><i class="fa fa-user"></i></div>
        </div>

       
        <div id="k3" class="single-field">
          <label>Password</label>
          <input type="password" name="password" class="form-control" required />
          <div class="icon"><i class="fa fa-lock"></i></div>


        </div>

        
        <div class="text">
 
          
          <a href=../appe.php><input type=button class="auth-btn" value='Login'></a>
        <div class="text">
          <span>
            Don't have an Account? Sign up <a href="./up.php">Here</a>
          </span>
        </div>
      </form>
    </div>
  </div>

</body>

</html>





