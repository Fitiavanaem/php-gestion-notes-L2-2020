<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<!-- <link rel="stylesheet" type="text/css" href="style.css"> -->
	<meta charset="utf-8">
	<style>
			
	#frm{

		border: solid gray 1px;
		width: 20%;
		border-radius: 5px;
		background-color:lightblue;
		padding: 50px;
		margin: 100px auto;

	}
	#btn{
		color: #fff;
		background: #337ab7;
		padding: 5px;
		margin-left: 69%;
	}
	     

    body{
		margin:0;
		padding:0;
		font-family: arial;
		font-style: normal;
		text-align: center;

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

	</style>
</head>
<body>

	<div id="frm">
				 <form method="POST" action="action.php">
				 	<p>
					 	<label>Username :</label>
					 	<input type="text" name="user" id="user">
				 	</p>
				 	<p>
					 	<label>Password :</label>
					 	<input type="password" name="password" id="pass">
				 	</p>
				 	<p>
				 	<button name="Login" id="btn">Login</button>	<!-- <input type="submit" id="btn" value="Login"> -->
				 	</p>
			
				 </form>
	 </div>

</body>
</html>