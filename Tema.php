<html>
<head>
	<link rel="stylesheet" type="text/css" href="../CSS/tema.css">
</head>
<body>
	<?php
	for($i=1;$i<=20;$i++){ /*am adaugat id si clasa dupa cum se cerea dar am stilizat numai clasa even resp. odd*/
		if ($i %2==0){print("<p id=\"$i\" class=\"even\" class=\"number\">$i</p>");}
					else {print("<p id=\"$i\" class=\"odd\" class=\"number\">$i</p>");}
	};

	?>

</body>
</html>