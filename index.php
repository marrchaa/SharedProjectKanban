<!DOCTYPE html>
<html>
<head>

	<script >
		function toggle_visibility(id) {
			       var e = document.getElementById(id);
			       if(e.style.display == 'block')
			          e.style.display = 'none';
			       else
			          e.style.display = 'block';
			    }</script>
	
	
	<style type="text/css">
		#popupBoxOnePosition{
			top: 0; left: 0; position: fixed; width: 100%; height: 120%;
			background-color: rgba(0,0,0,0.7); display: none;
		}
		.popupBoxWrapper{
			width: 550px; margin: 50px auto; text-align: left;
		}
		.popupBoxContent{
			background-color: #FFF; padding: 15px; 
		}
	</style>

</head>

<body>

<h1>Projektu pievienosana</h1>
	
	<div id="popupBoxOnePosition">
			<div class="popupBoxWrapper">
				<div class="popupBoxContent">
					<h3>Projektu pievienosanas forma</h3>
					<p>Pievienojiet projekta autoru nosaukumu aprakstu</p>
					
					<form action="add_project.php">
						Ievadiet Projekta Autoru: <br>
						<input type="text" name="author"><br>
						
						Ievadiet Projekta nosaukumu:<br>
						<input type="text" name="project_name"><br>
						
						Ievadiet projekta aprakstu:<br>
						<input type="text" name="project_description"><br><br>
						
						<input type="submit" value="Submit">
					</form>


					<p><a href="javascript:void(0)" onclick="toggle_visibility('popupBoxOnePosition');"><button>close</button></a></p>
				</div>
			</div>
		</div>

	

	<?php
	include "DB_connection.php";
	//include "search_all_projects.php";
	
	$mysqli->close();
	?>
	
		<div id="wrapper">
			<p><a href="javascript:void(0)" onclick="toggle_visibility('popupBoxOnePosition');"><button>Jauns projekts</button></a></p>
		</div><!-- wrapper end -->

	
	<!--<script src="adding_procject.js"></script>-->

</body>


</html>