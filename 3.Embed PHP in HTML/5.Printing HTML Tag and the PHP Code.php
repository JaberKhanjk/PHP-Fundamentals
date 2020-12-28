<!DOCTYPE html>
<html>
    <head>
		<title> Print HTML Tag and the PHP Code </title>
    </head>

    <body> 
        <!-- Staring of the HTML Tag Inside with the PHP Code -->
		<?= "<p>" ?>
             Another way to print HTML Tag also.
		<?= "</p>" ?>
		<!-- Ending of the HTML Tag Inside with the PHP Code -->

		<?= "<p>" ?>
		<!-- Another PHP Block of Code inside the PHP Block called Nested PHP Block -->
		<?php 
		    echo "<br>";
			echo "<p> this will just print the paragraph text of HTML tag onto the browser.";
		?>

		<?= "</p>" ?>

    </body>
</html>
