<?php include "functions.php"; ?>
<?php include "includes/header.php"; ?>

<section class="content">

	<aside class="col-xs-4">

		<?php Navigation(); ?>


	</aside>
	<!--SIDEBAR-->


	<article class="main-content col-xs-8">



		<?php


		/* 
		   Step 1:  Use the Echo Function to say hello with html h1                  tags embedded inside php.
		

		   Step 2: Write a comment above the echo function and explain
		   what that function is doing.


		   */
		//Output a text to the screen
		echo "<h1>Hello World</h1>";
		echo "<p>This is my first php page</p>";
		?>



	</article>
	<!--MAIN CONTENT-->

	<?php include "includes/footer.php"; ?>