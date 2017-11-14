<?php
$connect = mysqli_connect("localhost", "root", "usbw", "2160870_sharedproject");
$query1 = "SELECT * FROM project_list WHERE status = 0 ORDER BY item_order ASC";
$query2 = "SELECT * FROM project_list WHERE status = 1 ORDER BY item_order ASC";
$query3 = "SELECT * FROM project_list WHERE status = 2 ORDER BY item_order ASC";
$query4 = "SELECT * FROM project_list WHERE status = 3 ORDER BY item_order ASC";
$result1 = mysqli_query($connect, $query1);
$result2 = mysqli_query($connect, $query2);
$result3 = mysqli_query($connect, $query3);
$result4 = mysqli_query($connect, $query4);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Dalītu projektu statusu</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="http://code.jquery.com/jquery-1.10.2.js"></script>
  <script src="http://code.jquery.com/ui/1.11.2/jquery-ui.js"></script>
  <script src="jquery-1.8.1.min.js" type="text/javascript"></script>
  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
	<script >
				function toggle_visibility(id) {
					       var e = document.getElementById(id);
					       if(e.style.display == 'block')
					          e.style.display = 'none';
					       else
					          e.style.display = 'block';
					    }
	</script>
</head>
<!-- Body -->
<body>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="index.php">Shared Project</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="index.php">Sākums</a></li>
        <li><a href="project_description.php">Projektu apraksti</a></li>
        <li><a href="#">Iestatījumi</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
      	<li><a href="javascript:void(0)" onclick="toggle_visibility('popupBoxOnePosition');"><span class="glyphicon glyphicon-ok">Pievienot projektu</span></a></li>
        <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      </ul>
    </div>
  </div>
</nav>

<div class="jumbotron">
  <div class="container text-center">
    <h1>PROJEKTU SARAKSTS</h1>      
  </div>
</div>
  
<div class="container-fluid bg-3 text-center">    
  <div class="row">
    <div class="col-sm-3 project-list">
      <p>Sākuma stadija</p>
  	    <div class="container box">
		     <ul class="list-unstyled" id="page_list">
			     <?php 
			     while($row = mysqli_fetch_array($result1))
			     {
			      echo '<li id="'.$row["Projekta_ID"].'">'.$row["nosaukums"].'</li>';
			     }
			     ?>
		     </ul>
      	</div>
  	<input type="hidden" name="page_order_list" id="page_order_list" />    	
    </div>
    <div class="col-sm-3"> 
      <p>Procesā</p>
        <div class="container box">
		     <ul class="list-unstyled" id="page_list1">
  		     <?php 
  		     while($row = mysqli_fetch_array($result2))
  		     {
  		      echo '<li id="'.$row["Projekta_ID"].'">'.$row["nosaukums"].'</li>';
  		     }
  		     ?>
		     </ul>
		     <input type="hidden" name="page_order_list" id="page_order_list" />
		  </div>
    </div>
    <div class="col-sm-3"> 
      <p>Testēšana</p>
        <div class="container box">
           <ul class="list-unstyled" id="page_list2">
             <?php 
             while($row = mysqli_fetch_array($result3))
             {
              echo '<li id="'.$row["Projekta_ID"].'">'.$row["nosaukums"].'</li>';
             }
             ?>
           </ul>
           <input type="hidden" name="page_order_list" id="page_order_list" />
        </div>
    </div>
    <div class="col-sm-3">
      <p>Pabeigts</p>
        <div class="container box">
           <ul class="list-unstyled" id="page_list3">
             <?php 
             while($row = mysqli_fetch_array($result4))
             {
              echo '<li id="'.$row["Projekta_ID"].'">'.$row["nosaukums"].'</li>';
             }
             ?>
           </ul>
           <input type="hidden" name="page_order_list" id="page_order_list" />
        </div>
    </div>
  </div>
</div><br>
<!-- Pop-up add_project form -->
<div id="popupBoxOnePosition">
	<div class="popupBoxWrapper">
		<div class="popupBoxContent">
			<h3>Projektu pievienosana</h3>
			<p>Pievienojiet projekta autoru nosaukumu aprakstu</p>
			
			<form id="add_project" action="add_project.php" method="post">
				Ievadiet Projekta Autoru: <br>
				<input type="text" name="author"><br>
				
				Ievadiet Projekta nosaukumu:<br>
				<input type="text" name="project_name"><br>
				
				Ievadiet projekta aprakstu:<br>
				<input type="text" name="project_description"><br>

				Ievadiet projekta statusu(0 - 4):<br>
				<input type="text" name="status"><br><br>
				<a href="javascript:void(0)" onclick="toggle_visibility('popupBoxOnePosition');"><button id="sub" class="btn btn-success" style="width: 100%">Pievienot</button></a>
			</form>

			<p><a href="javascript:void(0)" onclick="toggle_visibility('popupBoxOnePosition');"><button type="button" class="btn btn-danger" style="width: 100%">Aizvērt</button></a></p>
		</div>
	</div>
</div>
<!-- End of add project form -->

<span id="result"></span>

<?php
	include "DB_connection.php";
	//include "search_all_projects.php";

	$mysqli->close();
?>

<footer class="container-fluid text-center">
  <p>RTU 3. grupa 2017</p>
</footer>
<script type="text/javascript">
			$("#sub").click( function() {
			 $.post( $("#add_project").attr("action"),
			         $("#add_project :input").serializeArray(),
			         function(info){ $("#result").html(info);
				   });
				clearInput();
				});
			 
			$("#add_project").submit( function() {
			  return false;
			});
			function clearInput() {
			    $("#add_project :input").each( function() {
			       $(this).val('');
			    });
			}
</script>
</body>
</html>

<script type="text/javascript">
	$(document).ready(function(){
 $( "#page_list" ).sortable({
  placeholder : "ui-state-highlight",
  update  : function(event, ui)
  {
   var page_id_array = new Array();
   $('#page_list li').each(function(){
    page_id_array.push($(this).attr("Projekta_ID"));
   });
   $.ajax({
    url:"update.php",
    method:"POST",
    data:{page_id_array:page_id_array},
   });
  }
 });

});
$(document).ready(function(){
 $( "#page_list1" ).sortable({
  placeholder : "ui-state-highlight",
  update  : function(event, ui)
  {
   var page_id_array = new Array();
   $('#page_list1 li').each(function(){
    page_id_array.push($(this).attr("Projekta_ID"));
   });
   $.ajax({
    url:"update.php",
    method:"POST",
    data:{page_id_array:page_id_array},
   });
  }
 });

});
</script>
