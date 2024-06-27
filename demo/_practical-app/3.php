<?php include "functions.php"; ?>
<?php include "includes/header.php"; ?>

<section class="content">

	<aside class="col-xs-4">

		<?php Navigation(); ?>

	</aside>
	<!--SIDEBAR-->


	<article class="main-content col-xs-8">

		<?php

		/*  Step1: Make an if Statement with elseif and else to finally display string saying, I love PHP



	Step 2: Make a forloop  that displays 10 numbers


	Step 3 : Make a switch Statement that test againts one condition with 5 cases

 */
		if (1 < 2) {
			echo "I love PHP";
		} elseif (2 < 3) {
			echo "I hate PHP";
		} else {
			echo "I don't know PHP";
		}
		echo "</br>";
		for ($i = 0; $i <= 9; $i++) {
			echo $i . "</br>";
		}
		$var = 1;
		switch ($var) {
			case 1:
				echo "Case 1";
				break;
			case 2:
				echo "Case 2";
				break;
			case 3:
				echo "Case 3";
				break;
			case 4:
				echo "Case 4";
				break;
			case 5:
				echo "Case 5";
				break;
			default:
				echo "Default Case";
				break;
		}
		?>






	</article>
	<!--MAIN CONTENT-->

	<?php include "includes/footer.php"; ?>