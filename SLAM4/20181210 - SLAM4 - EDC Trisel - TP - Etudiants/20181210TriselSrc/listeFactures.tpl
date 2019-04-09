<body>
<h1>Voici la liste de vos factures :</h1>
	{foreach from=$lesFactures item=uneFacture}
		{$uneFacture["anMois"]} 
		<a href = "{$uneFacture["nomFichier"]}">
			{$uneFacture["nomFichier"]}
		</a>
		<br/>
	{/foreach}
</body>
