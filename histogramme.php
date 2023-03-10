<!DOCTYPE html>
<html>
<head>
	<title>Histogramme</title>
	<meta charset="utf-8">
	<style>
		li{
			display: inline-block;
			background-color:white;


		}
		a{    text-decoration: none;
              color: black;
              background-color:white;
              padding: 15px;
              border-radius:4px;

		}
		a:hover{
			cursor: pointer;
			text-decoration: none;

		}
	</style>
</head>
<body style="background-color: #f2f2f2;">
<div style="
           margin-left: 100px;
           margin-right: 100px;
           background-color:#b8b894;
           padding:20px;
           height: 30px;
           border-radius:4px;
           text-align: center;">
           <ul>
              <li><a  href="Etudiant.php">Etudiant</a></li>
	          <li><a  href="Matiere.php">Matière</a></li>
              <li><a  href="Note.php">Notes</a></li>
              <li><a  href="moyenne.php">Moyenne</a></li>
              <li><a  href="classement.php">Resultat d'examen</a></li>
              <li><a  href="histogramme.php">Histogramme</a></li>
           </ul>
	
</div>
<div style="
           margin-left: 100px;
           margin-right: 100px;
           background-color:#d6d6c2;
           padding:20px;
           height: 30px;
           border-radius:4px;
           margin-top: 8px;">
           <h1  style="color: black;
	         margin-top:-8px;">
	<b>Histogramme</b>
</h1>
</div>
<div style="margin-top:5px;
           margin-left: 100px;
           margin-right: 100px;
           background-color: #ebebe0;
           padding: 100px;
           height: 270px;
           border-radius: 4px;">


<div style="margin-left:240px" class="col span_1_of_2">
		<canvas id="bar" width="600" height="300" ></canvas>
	</div>


<script type="text/javascript" src="chartnom.js"></script>
<script type="text/javascript" >
	var bar = document.getElementById("bar")
var barchart = new Chart(bar,{
	type: 'bar',
	data: {
		labels:
[
"Etudiant1","Etudiant2","Etudiant3","Etuidant4"			
],



		datasets: [{
			label:"Moyenne Génerale des Etudiants",

			data: 
[
"5","17","11","8"
],
			backgroundColor: [
				'rgba(255,99,132,0.2)',
				'rgba(54,162,235,0.2)',
				'rgba(255,206,86,0.2)',
				'rgba(75,192,192,0.2)',
				'rgba(153,102,255,0.2)',
				'rgba(255,64,64,0.2)',
			],
			borderColor: [
				'rgba(255,99,132,1)',
				'rgba(54,162,235,1)',
				'rgba(255,206,86,1)',
				'rgba(75,192,192,1)',
				'rgba(155,102,255,1)',
				'rgba(255,59,64,1)',
			],
			hoverBackgroundColor:[
			'rgba(255,99,132,1)',
				'rgba(54,162,235,1)',
				'rgba(255,206,86,1)',
				'rgba(75,192,192,1)',
				'rgba(155,102,255,1)',
				'rgba(255,59,64,1)',

			],
			borderWidth: 1,


		}]
	},
	options: {
		scales: {
			xAxes: [{
				gridLines: {
					offsetGridLines: true,
				}
			}],
			yAxes: [{
                stacked: true
            }]
		}
	}
})
</script>

	
</div>
</body>
</html>