function series(rne, dateDebut, dateFin) {
$.getJSON('report_switch_bis.php?action=EtabSerie&rne=' + rne+'&dateDebut='+dateDebut+'&dateFin='+dateFin, function(seriesTemps) {
	
console.log(seriesTemps);


$.each(seriesTemps, function (clefJsonResultat, valeurJsonResultat) {
    valeurJsonResultat.y 	 = valeurJsonResultat.nbCnx;
	valeurJsonResultat.name	 = valeurJsonResultat.DateObservation ;
});

var optionsSeriesxUsages = {
	
	chart: {
        renderTo: 'graph_series',
    },
	xAxis: {
            type: 'date'
        },
    series: [{
        data: []
    }]
		
};


optionsSeriesxUsages.series.push({
    data: seriesTemps
})

optionsSeriesxUsages.title = {
text: 'Répartition des visites par catégorie d\'usages', style: {fontWeight: 'bold'}
};

var chartCnxSeries = new Highcharts.Chart(optionsSeriesxUsages);
});
}