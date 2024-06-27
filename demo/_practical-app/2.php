<?php include "functions.php"; ?>
<?php include "includes/header.php";?>

<section class="content">

    <aside class="col-xs-4">

        <?php Navigation();?>


    </aside>
    <!--SIDEBAR-->


    <article class="main-content col-xs-8">


        <?php



		/* Step 1: Make 2 variables called number1 and number2 and set 1 to value 10 and the other 20:

		  Step 2: Add the two variables and display the sum with echo:


		  Step3: Make 2 Arrays with the same values, one regular and the other associative

		 
			 */

		$number1 = 10;
		$number2 = 20;
		$sum = $number1 + $number2;
		echo $sum . "</br>";

		$number_arrays1 = [10];
		$number_arrays2 = ["first_value" =>20];
		echo $number_arrays1[0] + $number_arrays2["first_value"]. "</br>";

		?>



    </article>
    <!--MAIN CONTENT-->

    <?php include "includes/footer.php"; ?>