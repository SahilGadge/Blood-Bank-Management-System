<html>
<br><br><a href="home.php"><h1>Blood Bank,Alephata</h1></a>

<style>
h1{
  color: white;
  font-weight: 600;
  letter-spacing: 0.01em;
  margin-left: 15px;
  margin-bottom: 35px;
  
  text-align:center;
}
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
	background-color:MAGENTA;
	color:black;
	border:4px solid white;
}
.b6{
	background-color:SILVER;
	color:black;
	border:6px solid white;	
}
.b7{
	background-color:peachpuff;
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
<table  cellspacing="15" cellpadding="10">
<tr><td>
<form action='otherin.php'>
<input type='submit' value='Insert Bag' class="b b2" style="font-size:20px"></form></td><td>
<form action='othery.php'>
<input type='submit' value='Near Expiry' class="b b4" style="font-size:20px"></form></td><td>

</table>
<table cellspacing='15' cellpadding='15'><tr><td>
<form action='showother.php'>
<input type='submit' value='Print' class="button b1" style="font-size:20px"></form></td>
<td>
<form action='otherdelete.php'>
<input type='submit' value='Delete' class="button b3" style="font-size:20px"></form></td></tr>
</table>

</html>