//login logout
function Login(){
	var username=document.login.username.value;
	username=username.toLowerCase();
	var password=document.login.password.value;
	password=password.toLowerCase();
	if (username=="admin" && password=="root"){
		window.location.href="app.php";
	}
	else{
		alert("Masukkan username dan password dengan benar");
	}
}
function Logout(){
	window.location.href="index.php";
}

//google map API //bikin marker coy
var myCenter=new google.maps.LatLng(-6.218114, 106.836660);
var marker;
//inisialisasi map
function initialize() {
	var mapProp = {
		center:new google.maps.LatLng(-6.218114, 106.836660),
		zoom:18,
		mapTypeId:google.maps.MapTypeId.ROADMAP
	};
	//
	var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);
	var marker=new google.maps.Marker({
		position:myCenter,
	});
	marker.setMap(map);
	//
	google.maps.event.addListener(marker,'click',function() {
		map.setCenter(marker.getPosition());
	});
}
google.maps.event.addDomListener(window, 'load', initialize);

//chart awal
$(function () {
	$('#linechart').highcharts({
		chart: {
			type: 'bar'
		},
		title: {
			text: 'Historic World Population by Region'
		},
		subtitle: {
			text: 'Source: Wikipedia.org'
		},
		xAxis: {
			categories: ['Africa', 'America', 'Asia', 'Europe', 'Oceania'],
			title: {
				text: null
			}
		},
		yAxis: {
			min: 0,
			title: {
				text: 'Population (millions)',
				align: 'high'
			},
			labels: {
				overflow: 'justify'
			}
		},
		tooltip: {
			valueSuffix: ' millions'
		},
		plotOptions: {
			bar: {
				dataLabels: {
					enabled: true
				}
			}
		},
		legend: {
			layout: 'vertical',
			align: 'right',
			verticalAlign: 'top',
			x: -40,
			y: 100,
			floating: true,
			borderWidth: 1,
			backgroundColor: ((Highcharts.theme && Highcharts.theme.legendBackgroundColor) || '#FFFFFF'),
			shadow: true
		},
		credits: {
			enabled: false
		},
		series: [{
			name: 'Year 1800',
			data: [107, 31, 635, 203, 2]
		}, {
			name: 'Year 1900',
			data: [133, 156, 947, 408, 6]
		}, {
			name: 'Year 2008',
			data: [973, 914, 4054, 732, 34]
		}]
	});
});

//chart satu
var chart = new Highcharts.Chart({

	chart: {
		renderTo: 'linechart1'
	},

	title: {
		text: 'Categorized chart'
	},

	xAxis: {
		categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec']
	},

	series: [{
		data: [29.9, 71.5, 106.4, 129.2, 144.0, 176.0, 135.6, 148.5, 216.4, 194.1, 95.6, 54.4]
	}]

});

$('#getcsv').click(function () {
	alert(chart.getCSV());
});

//chart dua
$(function () {
	var chart = new Highcharts.Chart({
		chart: {
			renderTo: 'linechart2',
			type: 'line'
		},
		title: {
			text: 'Highcharts Draggable Legend Demo'
		},
		xAxis: {
			categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun',
			'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
			labels: {
				zIndex: 6
			}
		},
		yAxis: {
			title: {
				text: 'Temperature (°C)'
			},
			plotLines: [{
				value: 0,
				width: 1,
				color: '#808080'
			}],
			labels: {
				zIndex: 6
			}
		},
		tooltip: {
			formatter: function() {
				return '<b>'+ this.series.name +'</b><br/>'+
				this.x +': '+ this.y +'°C';
			}
		},
		legend: {
			layout: 'vertical',
			backgroundColor: 'white',
			align: 'right',
			verticalAlign: 'top',
			y: 60,
			x: -10,
			borderWidth: 1,
			borderRadius: 0,
			title: {
				text: ':: Drag me'
			},
			floating: true,
			draggable: true,
			zIndex: 20
		},
		series: [{
			name: 'Tokyo',
			data: [7.0, 6.9, 9.5, 14.5, 18.2, 21.5, 25.2, 26.5, 23.3, 18.3, 13.9, 9.6]
		}, {
			name: 'New York',
			data: [-0.2, 0.8, 5.7, 11.3, 17.0, 22.0, 24.8, 24.1, 20.1, 14.1, 8.6, 2.5]
		}, {
			name: 'Berlin',
			data: [-0.9, 0.6, 3.5, 8.4, 13.5, 17.0, 18.6, 17.9, 14.3, 9.0, 3.9, 1.0]
		}, {
			name: 'London',
			data: [3.9, 4.2, 5.7, 8.5, 11.9, 15.2, 17.0, 16.6, 14.2, 10.3, 6.6, 4.8]
		}]
	});
});

//chart tiga //piechart
$(function () {

	$(document).ready(function () {

        // Build the chart
        $('#piechart').highcharts({
        	chart: {
        		plotBackgroundColor: null,
        		plotBorderWidth: null,
        		plotShadow: false
        	},
        	title: {
        		text: 'Browser market shares at a specific website, 2014'
        	},
        	tooltip: {
        		pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
        	},
        	plotOptions: {
        		pie: {
        			allowPointSelect: true,
        			cursor: 'pointer',
        			dataLabels: {
        				enabled: false
        			},
        			showInLegend: true
        		}
        	},
        	series: [{
        		type: 'pie',
        		name: 'Browser share',
        		data: [
        		['Firefox',   45.0],
        		['IE',       26.8],
        		{
        			name: 'Chrome',
        			y: 12.8,
        			sliced: true,
        			selected: true
        		},
        		['Safari',    8.5],
        		['Opera',     6.2],
        		['Others',   0.7]
        		]
        	}]
        });
    });

});