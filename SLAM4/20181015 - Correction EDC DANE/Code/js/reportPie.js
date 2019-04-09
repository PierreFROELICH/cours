function report_pie(rne, dateDebut, dateFin) {
$.getJSON('report_switch.php?action=EtabRepartUsages&rne=' + rne+'&dateDebut='+dateDebut+'&dateFin='+dateFin, function(jsonResultat) {

console.log(jsonResultat);

$.each(jsonResultat, function (clefJsonResultat, valeurJsonResultat) {
    valeurJsonResultat.y 	 = valeurJsonResultat.nb_cnx;
	valeurJsonResultat.name	 = valeurJsonResultat.usage ;
});


var chart = new Highcharts.Chart({

    chart: {
        renderTo: 'graph_cnx_usages',
        type: 'pie'
    },

    series: [{
        data: jsonResultat
    }]

});
});
}