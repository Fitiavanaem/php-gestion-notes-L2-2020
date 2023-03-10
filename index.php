<!DOCTYPE html>
<html>
<head>
	<title>exemple</title>
	<meta charset="utf-8">
    <link rel="stylesheet" href="bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="jquery1/3.3.1/jquery.min.js"></script>
    <script src="bootstrap/3.3.7/js/bootstrap.min.js"></script>
     <style>
     	body{
		margin:0;
		padding:0;
		font-family: arial;
		font-style: normal;

	}
	.contai{
		position: absolute;
		left: 0;
		top: 0;
		width: 100%;
		height: 100vh;
		animation: animate 16s ease-in-out infinite;
		background-size: cover; 
	}
	/*.outer{
 position: absolute;
 left: 0;
 top: 0;
 width: 100px;
 height: 100vh;
 background: rgba(0,0,0,0.5)

	}*/

	.detai{
		position: absolute;
		left: 50%;
		top: 50%;
		transform: translate(-50%,-50%);
		text-align: center;
        }
        .detai h1{
        	font-size: 3em;
        	color:#b3003b;

        }
        .detai h2{
        	text-transform: capitalize;
        	color: blue;
        }
        .detai h2 span:nth-child(1){
        	color:blue;
        }
        .detai h2 span:nth-child(2){
        	color:blue;
        }
	@keyframes animate{
		0%,100%{
			background-image: url(3.JPG);
		}
		25%{
			background-image: url(23.JPG);
		}
		50%{
			background-image: url(1.JPG);
			}
		75%{
			background-image: url(21.JPG);
		}
		80%{
			background-image: url(26.JPEG);
		}
	}
	#gestion{
		
	    font-size: 20px;
	    border-radius: 16px;
	    cursor: pointer;
	    width: 200px;
	    margin-left: 240px;

			}
			 a{
				color:white;
			}
			a:hover{
				text-decoration: none;
				color: #e6e6e6;

			}
     </style>
       <script type="text/javascript" src="jquery/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="jquery/jquery.min.js"></script>
    
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="jquery/3.3.1/jquery.min.js"></script>
  <script src="bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>
<body>
	<div class="contai">
		<div class="oute">
			<div class="detai">
				<h1>ENI (ECOLE NATIONALE D'UN INFORMATIQUE)</h1>
							<h2>
								<span>UNIVERSITE FIANARANTSOA</span>/
								<span>UNIVERSITE TOLIARA(2018-2019) en L2: <a href="propos.php" style="color: #b3003b;">A propos</a></span>
							</h2>
							<div><h2 style="color: black;">Voulez-vous gérer des notes d'un établissement?</h2></div>
			  <div id="gestion">
				  <div>
  
			   		 <form method="POST" action="login/action.php">
					        <div class="input-group">
					              <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
					              <input id="email" type="text" class="form-control" name="user" placeholder="Nom d'utilisateur" style="padding: 20px;">
			            	</div><br>
				            <div class="input-group">
				              <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
				              <input id="password" type="password" class="form-control" name="password" placeholder="Mot de passe" style="padding: 20px;">
				            </div> <br>
				            <div>
				            	<button name="Login" class="btn btn-primary btn-lg btn-block">Connexion</button>
				            </div>
			          </form>
                   </div>
              </div>
			</div>
	   </div>
   </div>

	

</body>
</html>
	<!-- 	<div class="oute">
			<div class="detai">
				<h1>ENI (ECOLE NATIONALE D'UN INFORMATIQUE)</h1>
							<h2>
								<span>UNIVERSITE FIANARANTSOA</span>/
								<span>UNIVERSITE TOLIARA(2018-2019) en L2</span>
							</h2>
				<div><h2 style="color: black;">Voulez-vous gérer des notes d'un établissement?</h2></div>
			<div id="gestion">
				 <div class="dropdown">
    <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">MENU
    <span class="caret"></span></button>
  <ul class="dropdown-menu">
      <li><a href="login/login.php">Gestion des notes</a></li>
      <li><a href="propos.php">A propos</a></li>
      </ul> -->
