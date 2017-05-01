<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="UTF-8" />
		<title></title>
		<link rel="stylesheet" href="https://cdn.concisecss.com/concise.min.css">
		<link rel="stylesheet" href="https://cdn.concisecss.com/concise-utils/concise-utils.min.css">
		<link rel="stylesheet" href="https://cdn.concisecss.com/concise-ui/concise-ui.min.css">
		<link rel="stylesheet" href="./css/style.css">
	</head>
  
	<body container>
    
    <?php
        if (isset($_POST["op1"]) AND !empty($_POST["op1"]) AND isset($_POST["op2"]) AND is_numeric($_POST["op1"]) AND is_numeric($_POST["op2"])) {
            $divZero = false;
            if ($_POST["operation"] == "+") {
              $resultat = $_POST["op1"]+$_POST["op2"];
            }
            else if ($_POST["operation"] == "-") {
              $resultat = $_POST["op1"]-$_POST["op2"];
            }
            else if ($_POST["operation"] == "x") {
              $resultat = $_POST["op1"]*$_POST["op2"];
            }
            else {
              if ($_POST["op2"] == 0) {
                echo "On ne peut pas diviser par 0";
                $divZero = true;
              }
              else {
                $resultat = $_POST["op1"]/$_POST["op2"];
              }
            }
            if (!$divZero) {
              echo $resultat;
            }
        }
        ?>
    
      <h3 class="_bb1">Calculatrice</h3>
      <form  class="_text-center" action="exo3.php" method="POST">
        <!-- opérande 1 -->

        <input placeholder="un nombre" type="text" name="op1" value="<?php if (isset($resultat)) { echo $resultat; }?>"/>

        <!-- opération -->

        <select name="operation">
          <option value="+">+</option>
          <option value="-">-</option>
          <option value="x">x</option>
          <option value="/">/</option>
        </select>

        <!-- opérande 2 -->

        <input placeholder="un nombre" type="text" name="op2" />

        <!-- bouton -->

        <button type="submit" name="soumis"> Calculer</button>

      </div>
	</body>
</html>