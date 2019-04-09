function cnx_usages(rne, dateDebut, dateFin) {
$.getJSON('015_report_switch.php?action=EtabRepartUsages&rne=' + rne+'&dateDebut='+dateDebut+'&dateFin='+dateFin, function(jsonResultat) {
	
console.log(jsonResultat);

$.each(jsonResultat, function (clefJsonResultat, valeurJsonResultat) {
    valeurJsonResultat.y 	 = valeurJsonResultat.nb_cnx;
	valeurJsonResultat.name	 = valeurJsonResultat.usage ;
});

var optionsCnxUsages = {
	
	chart: {
        renderTo: 'graph_cnx_usages',
        type: 'pie'
    },
    series: [{
        name: 'usage',
        data: []
    }]
		
};

optionsCnxUsages.series.push({
    data: jsonResultat
})

optionsCnxUsages.title = {
text: 'Répartition des visites par catégorie d\'usages', style: {fontWeight: 'bold'}
};

var chartCnxUsages = new Highcharts.Chart(optionsCnxUsages);
});
}