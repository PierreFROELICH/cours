function report_chart(rne, dateDebut, dateFin) {
$.getJSON('report_switch.php?action=EtabRepartUsages&rne=' + rne+'&dateDebut='+dateDebut+'&dateFin='+dateFin, function(jsonResultat) {

console.log(jsonResultat);

var x=new Array();

$.each(jsonResultat, function (clefJsonResultat, valeurJsonResultat) {
	x.push(valeurJsonResultat.usage);
    valeurJsonResultat.y 	 = valeurJsonResultat.nb_cnx;
	valeurJsonResultat.name	 = valeurJsonResultat.usage ;
});


var chart = new Highcharts.Chart({

    chart: {
        renderTo: 'graph_cnx_usages',
        type: 'column'
    },
	xAxis: {
                    categories: x,              //Populating X-axis
                    type: 'category',
                    allowDecimals: false,
                    title: {
                        text: "Usages possibles"
                    }
			}
					,

    series: [{
        data: jsonResultat
    }]

});
});
}