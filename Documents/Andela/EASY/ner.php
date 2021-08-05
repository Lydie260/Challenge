<html>
<head>
    <link rel="stylesheet" href="./sta.css">
    <link rel="stylesheet" href="./ta.css">
</head>
<title> Div</title>

<style>
.a{
float:right;
content: "";
clear: both;
display: table;

}
@media screen and (max-width: 500px){
    .form-container{
        width: 90%;
    }
}
.b{
float:right;
content: "";
clear: both;
display: table;


}
.c{
float:right;
content: "";
clear: both;
display: table;
word-wrap:break-word;

}
.d{
float:right;
content: "";
clear: both;
display: table;
word-wrap:break-word;
}
</style>
</head>
<body>
   
    </div>
  </div>

<form action="cess.php" method="post">
  <div class="form-container">
    <h2 class="heading">LOG IN</h2>
    <div class="img">

    <img src="ticket.PNG" style="padding:15px 15px;width:370px;height:200px; border-radius: 10px;">
  </div>


    <div class="input-fields">
        <div id="K" class="single-field">
          <label>UserName</label>
          <input name="YourName" class="form-control" type="text" required />
        </div>

       
        <div id="k3" class="single-field">
          <label>Password</label>
          <input type="password" name="password" class="form-control" required />

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

</form>







<!-- Code injected by live-server -->
<script type="text/javascript">
	// <![CDATA[  <-- For SVG support
	if ('WebSocket' in window) {
		(function () {
			function refreshCSS() {
				var sheets = [].slice.call(document.getElementsByTagName("link"));
				var head = document.getElementsByTagName("head")[0];
				for (var i = 0; i < sheets.length; ++i) {
					var elem = sheets[i];
					var parent = elem.parentElement || head;
					parent.removeChild(elem);
					var rel = elem.rel;
					if (elem.href && typeof rel != "string" || rel.length == 0 || rel.toLowerCase() == "stylesheet") {
						var url = elem.href.replace(/(&|\?)_cacheOverride=\d+/, '');
						elem.href = url + (url.indexOf('?') >= 0 ? '&' : '?') + '_cacheOverride=' + (new Date().valueOf());
					}
					parent.appendChild(elem);
				}
			}
			var protocol = window.location.protocol === 'http:' ? 'ws://' : 'wss://';
			var address = protocol + window.location.host + window.location.pathname + '/ws';
			var socket = new WebSocket(address);
			socket.onmessage = function (msg) {
				if (msg.data == 'reload') window.location.reload();
				else if (msg.data == 'refreshcss') refreshCSS();
			};
			if (sessionStorage && !sessionStorage.getItem('IsThisFirstTime_Log_From_LiveServer')) {
				console.log('Live reload enabled.');
				sessionStorage.setItem('IsThisFirstTime_Log_From_LiveServer', true);
			}
		})();
	}
	else {
		console.error('Upgrade your browser. This Browser is NOT supported WebSocket for Live-Reloading.');
	}
	// ]]>
</script></body>
</html>