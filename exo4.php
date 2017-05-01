<!DOCTYPE html>
<html lang="fr">
	<head>
		<link rel="stylesheet" href="https://cdn.concisecss.com/concise.min.css">
		<link rel="stylesheet" href="https://cdn.concisecss.com/concise-utils/concise-utils.min.css">
		<link rel="stylesheet" href="https://cdn.concisecss.com/concise-ui/concise-ui.min.css">
		<link rel="stylesheet" href="./css/style.css">

		<meta charset="UTF-8" />
		<title></title>
	</head>
	<body container>
    
    <?php
       if (isset($_POST["question1"]) AND isset($_POST["question2"]) AND isset($_POST["question3"])) {
         $score = 0;
         if ($_POST["question1"] == "vrai") {
           $score++;
           echo "Question 1: bonne réponse";
         }
         else {
           echo "Question 1: mauvaise réponse";
         }
         echo "<br>";
         if ($_POST["question2"] == "vrai") {
           $score++;
           echo "Question 2: bonne réponse";
         }
         else {
           echo "Question 2: mauvaise réponse";
         }
         echo "<br>";
         if ($_POST["question3"] == "vrai") {
           $score++;
           echo "Question 3: bonne réponse";
         }
         else {
           echo "Question 3: mauvaise réponse";
         }
         echo "<br>Score: " . $score . "<br>";
       }
    ?>
		<h3 class="_bb1">Quizz</h3>
		<form action="exo4.php" method="post">
			<h5 class="alert-box"><span class="_c-base-primary">Quelle est la capitale de la France ?</span></h5>
			<label class="radio">
				<input type="radio" name="question1"  value="faux" > Lyon
			</label>
			<label class="radio">
				<input type="radio" name="question1"  value="vrai"> Paris
			</label>
			<label class="radio">
				<input type="radio" name="question1"  value="faux"> Marseille
			</label>
			<h5 class="alert-box"><span class="_c-base-primary">Quelle est le nombre suivant de la suite 1,2,4,8 ?</span></h5>
			<label class="radio">
				<input type="radio" name="question2"  value="vrai" > 16
			</label>
			<label class="radio">
				<input type="radio" name="question2"  value="faux"> 32
			</label>
			<h5 class="alert-box"><span class="_c-base-primary">La bataille de Marignan a eu lieu en </span> </h5>
			<label class="radio">
				<input type="radio" name="question3"  value="faux" > 1492
			</label>
			<label class="radio">
				<input type="radio" name="question3"  value="vrai"> 1515
			</label>
			<label class="radio">
				<input type="radio" name="question3"  value="faux"> 1789
			</label>

			<button class="btn">Envoyer</button>

			<input type="hidden" value="3" name="nbq">
		</form>
	</body>
</html>