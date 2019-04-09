<body>
<h1>Voici les adresses dont nous disposons pour cet identifiant:</h1>
	<form method = "POST" action="consulterFactures.php?action=affiFactures">
		<select name = "laMaison">
		{foreach from=$lesMaisons item=uneMaison}
			<option value="{$uneMaison["id"]}">
				{$uneMaison["adresse"]}
			</option>
		{/foreach}
		<input type="submit" value="Valider">
	</form>
</body>
