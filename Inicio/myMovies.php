
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>My profile</title>
	 <?php include 'css&js.php' ?>
     <link href='http://fonts.googleapis.com/css?family=Open+Sans:300' rel='stylesheet' type='text/css'>
          <link rel="stylesheet" href="css/SideBarStyle.css">

	<style type="text/css" media="screen">
		.table input{
			border: none;
		}
	</style>
</head>
<body>
<?php include 'header.php' ?>
<div class="container-fluid">
	<div class="row">
	  <div class="col-xs-6 col-sm-4">
		<ul class="sidebar">
	      <li class="sidebar-brand"><a href="">My Profile</a></li>
	      <li><a href="myAccount.php">My account</a></li>
	      <li><a href="myMovies.php">My movies</a></li>
	      <li><a href="#">My games</a></li>
	      <li><a href="#">My series</a></li>
	      </ul>
	   </div>
    	<div class="col-xs-6 col-sm-4" style="background-color:white";>
    	<form action="View.php" action="modifyUser">
		<table class="table table-hover">			
			<tbody>
				<tr>
				<th scope="row">Nick</th>
				<td><input type="text" id="cellNick" value="Javier"></td>
				</tr>

				<tr>
				<th scope="row">E-maqqqqqqqqqqqil</th>
				<td><input type="email" id="cellEmail" value="mendozarqqq@gmail.com"></td>
				</tr>
				
				<tr>
				<th scope="row">Password</th>
				<td><input type="password" id="cellPassword" value="*******"></td>
				</tr>

				<tr>
				<th scope="row">URL profile image</th>
				<td><input type="text" id="cellUrl" value="www.google.es"></td>
				</tr>

				<tr>
				<th scope="row">Country</th>
				<td><input type="text" id="cellCountry" value="Spain"></td>
				</tr>

				<tr>
				<th scope="row">City</th>
				<td><input type="text" id="cellCity" value="Madrid"></td>
				</tr>
				<tr>

				<th scope="row">New Offers?</th>
				<td>
					<div class="radio">
					  <label><input type="radio" id="cellOffersYes" name="optradio" checked>Yes</label>
					</div>
					<div class="radio">
					  <label><input type="radio" id="cellOffersNo" name="optradio">No</label>
					</div>
				</td>
				</tr>
			</tbody>
		</table>
		</form>
			<div align="center" display:inline>
				<<button type="button" value = "asad"></button>
				
				<button type="button" value = "asad"></button>
			</div>
		</div>
   </div>
</div>

</body>
</html>