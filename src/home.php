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
	background-color:MAGENTA;
	color:black;
	border:4px solid white;
}
.b6{
	background-color:orange;
	color:black;
	border:6px solid white;	
}
.b7{
	background-color:peachpuff;
	color:black;
	border:6px solid white;	
}
.b8{
	background-color:darkkhaki;
	color:black;
	border:6px solid white;	
}
.b9{
	background-color:slateblue;
	color:black;
	border:6px solid white;	
}
.b10{
	background-color:silver;
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
<form action='input1.php'>
<input type='submit' value='Insert Bag' class="b b2" style="font-size:20px"></form></td><td>
<form action='seaissue.php' >
<input type='submit' value='Issue Bag' class="b b6" style="font-size:20px"></form></td></tr></td>
</table>
<table cellspacing="0" cellpadding="10"><tr><td>
<form action='month.php'>
<input type='submit' value='Montly' class="button b8" style="font-size:20px"></form></td><td>
<form action='expiry.php'>
<input type='submit' value='Near Expiry' class="button b9" style="font-size:20px"></form></td>
<td><form action='others.php'>
<input type='submit' value='Others' class="button b10" style="font-size:20px"></form></td></tr>

</table>
<table cellspacing='15' cellpadding='15'><tr><td>
<form action='show.php'>
<input type='submit' value='Print' class="button b1" style="font-size:20px"></form></td><td><form action='seaupdate.php'>
<input type='submit' value='Update' class="button b5" style="font-size:20px"></form></td>

<td>
<form action='search.php'>
<input type='submit' value='Search' class="button b4" style="font-size:20px"></form></td>
<td>
<form action='seadelete.php'>
<input type='submit' value='Delete' class="button b3" style="font-size:20px"></form></td></tr>
</table>

</html>