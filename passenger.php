<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <!--<title>Registration Form in HTML CSS</title>-->
    <!---Custom CSS File--->
    <link rel="stylesheet" href="style1.css" />
  </head>
  <body>
    
    <section class="container">
      <header>Passenger Form</header>
      <form method="POST" class="form" onsubmit="return openPopup()">
        <div class="input-box">
          <label>p_id</label>
          <input type="text" placeholder="Enter Passenger id"  pattern="[a-z A-Z 0-9]*" name="ni" required  />
        </div>

        <div class="input-box">
          <label>p_name</label>
          <input type="text" placeholder="Enter Name"  pattern="[a-z A-Z]*" name="nm" required />
        </div>
        <div class="input-box">
        <label>p_gender</label>
          <input type="text" placeholder="Enter gender" pattern="[a-z A-Z]*" name="gn" required />
        </div>
        <div class="input-box address">
          <label>p_city</label>
            <input type="text" placeholder="Enter your city" pattern="[a-z A-Z]*" name="ci" required />
          </div>
        <button><input type="submit" name="sb"></button>
        <button><a href="index.html#insert">Back</button></a>  
      </form>
    </section>
    
  <!-- Code injected by live-server -->
<script>
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
</script>
<?php 
$servername="localhost:3307";
$username="root";
$password="";
$database="dbms";
$con=mysqli_connect($servername,$username,$password,$database);
if(isset($_POST['sb']))
{
    $p_id=$_POST['ni'];
    $p_name=$_POST['nm'];
    $p_gender=$_POST['gn'];
    $p_city=$_POST['ci'];
    $query="INSERT INTO passenger(p_id,p_name,p_gender,p_city) values ('$p_id','$p_name','$p_gender','$p_city')";
    $run=mysqli_query($con,$query);
}

?>
<script>
        function openPopup() {
            var confirmation = confirm("Are you sure you want to submit the form?");

            return confirmation;
        }
    </script>
</body>
</html>