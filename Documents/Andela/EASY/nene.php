<?php
session_start();
$token =md5 (uniqid(microtime(), true));
$_SESSION['sec_token'] = $token;
?>








<html>

<head>
    <link rel="stylesheet" href="./sta.css">
    <link rel="stylesheet" href="./ta.css">
</head>
<title> Div</title>

<style>
.a {
    float: right;
    content: "";
    clear: both;
    display: table;

}

.b {
    float: right;
    content: "";
    clear: both;
    display: table;


}

.c {
    float: right;
    content: "";
    clear: both;
    display: table;
    word-wrap: break-word;

}

.d {
    float: right;
    content: "";
    clear: both;
    display: table;
    word-wrap: break-word;
}
</style>
</head>

<body>

    </div>
    </div>

    <form action="cess.php" method="post">
        <div class="form-container">
            <h2 class="heading">Buy Yours</h2>
            <div class="img">

                <img src="ticket.PNG" style="padding:15px 15px;width:370px;height:200px; border-radius: 10px;">
            </div>


            <div class="input-fields">
                <form name="form">
                    <div id="K" class="single-field">
                        <label>UserName</label>
                        <input name="YourName" class="form-control" type="text" required />
                    </div>


                    <div id="k3" class="single-field">
                        <label>Password</label>
                        <input type="password" name="password" class="form-control" required />

                    </div>


                    <div class="text">


                        <a href=../pro/appe.html><input type=button class="auth-btn" value='Login'></a>
                        <div class="text">
                            <div>
                                <input type="hidden" name="token" value="<?php echo $token; ?>" />
                            </div>
                            <span>
                                Don't have an Account? Sign up <a href="./pro/appe.html">Here</a>
                            </span>
                        </div>
                </form>
            </div>
        </div>

    </form>







</body>

</html>