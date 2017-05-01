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
		<h3 class="_bb1">Conjugaison</h3>
		<form method="post" action="conjuguer.php" class="form-horizontal">
			<label class="control-label">Verbe du premier groupe</label> 
			<input type=text name="verbe">
			<label>Temps</label> 
			<label class="checkbox"><input type=checkbox name="temps[]" value="present"> Présent </label>
			<label class="checkbox"><input type=checkbox name="temps[]" value="futur"> Futur </label>
			<label class="checkbox"><input type=checkbox name="temps[]" value="imparfait"> Imparfait </label>
			<button class="btn" type="submit" name="accepter">Envoyer</button>
		</form>
	</body>
</html>