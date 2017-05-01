<!doctype html>
<html>
	<head>
		<meta charset="UTF-8" />
		<link rel="stylesheet" href="https://cdn.concisecss.com/concise.min.css">
		<link rel="stylesheet" href="https://cdn.concisecss.com/concise-utils/concise-utils.min.css">
		<link rel="stylesheet" href="https://cdn.concisecss.com/concise-ui/concise-ui.min.css">
		<link rel="stylesheet" href="./css/style.css">
	</head>
	<body container>

    <?php
      if (isset($_GET["table"]) AND !(empty($_GET["table"]))) {
        $i = 0;
        while ($i <= 10) {
          echo $i . " x " . $_GET["table"] . " = " . $i*$_GET["table"] . "<br>";
          $i++;
        }
      }
    ?>
    
		<form  method="GET">
			<input type=text name="table" placeholder="table">
			<button  class="btn" type="submit">ENVOYER</button>
		</form>
	</body>
</html>