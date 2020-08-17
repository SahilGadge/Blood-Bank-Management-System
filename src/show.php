<html>
<style>
form{
	
	margin:0;
	text-align:center;
	
}
table{
	
		

	margin:0 auto;	
	
}
body{
	margin:0;
	font:sans-serif;
}
.button{
	background-color=#4CAF50;
	color:white;
	border:none;
	padding: 30px 30px;
	text-decoration:none;
	display:inline-block;
	font-size:16px;
	margin:4px 2px;
	cursor:pointer;
	border-radius:20px;
}
.b1{
	background-color:palegreen;
	color:black;
	border:2px solid #4CAF50
	
}
.b{
	background-color=#4CAF50;
	color:white;
	border:none;
	padding: 70px 60px;
	text-decoration:none;
	display:inline-block;
	font-size:16px;
	margin:4px 2px;
	cursor:pointer;
	border-radius:0px;
}
.b2{
	background-color:palegreen;
	color:black;
	border:6px solid white;
	
}
.b1{
	background-color:yellow;
	color:black;
	border:4px solid white;
	
}
.b3{
	background-color:RED;
	color:black;
	border:4px solid white;
	
}
.b4{
	background-color:AQUA;
	color:black;
	border:4px solid white;	
}
.b5{
	background-color:AQUA;
	color:black;
	border:4px solid white;
}
.b6{
	background-color:SILVER;
	color:black;
	border:6px solid white;	
}
input[type=submit]{
	font-family:"Arial Black";
}
html {
  background-color: #ff4a56;
}
</style>
<br><br>
<table  cellspacing="20" cellpadding="15">
<tr><td>
<form action='hello.php'>
<input type='submit' value='All Bag Details' class="b b2" style="font-size:20px"></form></td><td><form action='stock.php'>
<input type='submit' value='Stock' class="b b6" style="font-size:20px"></form></td>

</table>
<table cellspacing='15' cellpadding='15'><tr><td>
<form action='showissue.php'>
<input type='submit' value='Issued Bags' class="button b1" style="font-size:20px"></form></td><td><form action='notissue.php'>
<input type='submit' value='Available Bags' class="button b5" style="font-size:20px"></form></td>
</table>
<table><td><form action='expired.php'>
<input type='submit' value='Expired' class="b b3" style="font-size:20px"></form></td></table>
</html>