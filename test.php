<?php

  echo $_SERVER['REQUEST_METHOD'];
?>
<html>
<head>N
	<title>$_POST</title>
	<script type="text/javascript">
		function loadXMLDoc() {
			var xmlhttp;

			if(window.XMLHttpRequest)
			{
				xmlhttp = new XMLHttpRequest();

				
			} else {
				xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
			}

			xmlhttp.onreadystatechange = function () {
				if(xmlhttp.readyState ==4 && xmlhttp.status ==  200) {
					document.getElementById("mydiv").innerHTML = xmlhttp.responseText;
				}
			}

			xmlhttp.open("GET", "ajax.php",false);
				xmlhttp.send();
		}
	</script>
</head>
<body>
<div id="test">

</div>
<span>What is going on right now</span>

<img src="http://placehold.it/350x150">
	<h2>contact</h2>
	<form action="test.php" method="post">
		<ul>
			<li>
				<label for="name">Name:</label>
				<input type="text" name="name">
			</li>
			<li>
				<input type="submit" value="GO"/>
			</li>	
		</ul>


	</form>

	<div id="mydiv"><h2>Let Ajax change this information</h2></div>
	<button type="button" onclick="loadXMLDoc()">Change the div</button>
</body>
</html>