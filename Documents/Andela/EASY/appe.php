
<?php
session_start();
$token = md5 (uniqid(microtime(), true));
$_SESSION['sec_token'] = $token;
?>















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
    <h2 class="heading">Buy Now</h2>
    <div class="img">

    <img src="ti.PNG" style="padding:initial;width:500px;height:300px; border-radius: 10px;">
  </div>


    <div class="input-fields">
      <form action="cess.php" method="post">
        <div id="K" class="single-field">
          <input name=" YourNames" placeholder="Enter YourName"class="form-control" type="text" required />
        </div>
        <div id="K" class="single-field">
            <input name="PhoneNumber" placeholder="Enter Phone Number" class="form-control" type="number" required />
          </div>

       
          <div id="K" class="single-field">
            <input name="CardID" placeholder="Enter Card Id" class="form-control" type="number" required />
          </div>

          <div id="K" class="single-field">
            <input name="Amount" placeholder="Enter Amount" class="form-control" type="number" required />
          </div>
        <div class="text">

          
        <div id="btn" class="single">
          <input type="hidden" name="token" value="<?php echo $token; ?>" />
          <input type=submit class="auth-btn" value='Buy Now'></a>

        </div>
        
      </form>
    </div>
  </div>

</body>

</html>





