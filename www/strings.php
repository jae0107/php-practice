<!DOCTYPE html>
<html>
	<head>
		<title></title>
	</head>
	<body>
		<?php
            $phrase = "Giraffe Academy";
			echo strtolower("$phrase <br>");
            echo strtoupper("$phrase <br>");
            echo strlen("$phrase");
            echo  "<br>";

            echo "$phrase[1] <br>";

            echo "Mike"[0];
            echo  "<br>";

            $phrase[0] = "B";
            echo "$phrase <br>";

            echo str_replace("raffe", "Panda", "$phrase <br>");

            $phrase = "Giraffe Academy";
            echo substr($phrase, 8, 3);
            echo "<br>";
            echo substr($phrase, 8);
		?>
	</body>
</html>