
<?php
class MyDB extends SQLite3{
		   function __construct(){
			   $this->open('F:\rest.db');
		   }
	   }
	  
	   $db = new MyDB();
	   if(!$db){
	   echo $db->lastErrorMsg();}
		else{   
			$db = new MyDB();
	        $sql = "SELECT bsr from other where bsr=(SELECT max(bsr) from other)";
			$result=$db->query($sql);
			$row=$result->fetchArray(SQLITE3_ASSOC);
			$d=$row['bsr'];
			$d=intval($d)+1;
			
			}
?>
<html>
<head>
<title>Insert Blood Bag Info</title>
  
  
      <style>
      /* NOTE: The styles were added inline because Prefixfree needs access to your styles and they must be inlined if they are on local disk! */
      .transition, form button, form .question label, form .question input[type="text"] {
  -moz-transition: all 0.25s cubic-bezier(0.53, 0.01, 0.35, 1.5);
  -o-transition: all 0.25s cubic-bezier(0.53, 0.01, 0.35, 1.5);
  -webkit-transition: all 0.25s cubic-bezier(0.53, 0.01, 0.35, 1.5);
  transition: all 0.25s cubic-bezier(0.53, 0.01, 0.35, 1.5);
}
h4{
  color: #ff4a56;
  font-weight: 600;
  letter-spacing: 0.01em;
  margin-left: 15px;
  margin-bottom: 35px;
  
  text-align:center;
}
* {
  font-family: Helvetica, sans-serif;
  font-weight: light;
  -webkit-font-smoothing: antialiased;
}

html {
  background-color: #ff4a56;
}

form {
  position: relative;
  display: inline-block;
  max-width: 700px;
  min-width: 500px;
  box-sizing: border-box;
  padding: 30px 25px;
  background-color: white;
  border-radius: 40px;
  margin: 40px 0;
  left: 50%;
  -moz-transform: translate(-50%, 0);
  -ms-transform: translate(-50%, 0);
  -webkit-transform: translate(-50%, 0);
  transform: translate(-50%, 0);
}
form h1 {
  color: #ff4a56;
  font-weight: 100;
  letter-spacing: 0.01em;
  margin-left: 15px;
  margin-bottom: 35px;
  text-transform: uppercase;
}
form .button {
  margin-top: 35px;
  background-color: white;
  border: 1px solid #ff4a56;
  line-height: 0;
  font-size: 17px;
  display: inline-block;
  box-sizing: border-box;
  padding: 20px 15px;
  border-radius: 60px;
  color: #ff4a56;
  font-weight: 100;
  letter-spacing: 0.01em;
  position: relative;
  z-index: 1;
}
form button:hover, form button:focus {
  color: white;
  background-color: #ff4a56;
}
form .question {
  position: relative;
  padding: 10px 0;
}
form .question:first-of-type {
  padding-top: 0;
}
form .question:last-of-type {
  padding-bottom: 0;
}
form .question label {
  transform-origin: left center;
  color: #ff4a56;
  font-weight: 100;
  letter-spacing: 0.01em;
  font-size: 17px;
  box-sizing: border-box;
  padding: 10px 15px;
  display: block;
  position: absolute;
  margin-top: -40px;
  z-index: 2;
  pointer-events: none;
}
form .question input[type="text"] {
  appearance: none;
  background-color: none;
  border: 1px solid #ff4a56;
  line-height: 0;
  font-size: 17px;
  width: 100%;
  display: block;
  box-sizing: border-box;
  padding: 10px 15px;
  border-radius: 60px;
  color: #ff4a56;
  font-weight: 100;
  letter-spacing: 0.01em;
  position: relative;
  z-index: 1;
}
form .question input[type="text"]:focus {
  outline: none;
  background: #ff4a56;
  color: white;
  margin-top: 30px;
}
form .question input[type="text"]:valid {
  margin-top: 30px;
}
form .question input[type="text"]:focus ~ label {
  -moz-transform: translate(0, -35px);
  -ms-transform: translate(0, -35px);
  -webkit-transform: translate(0, -35px);
  transform: translate(0, -35px);
}
form .question input[type="text"]:valid ~ label {
  text-transform: uppercase;
  font-style: italic;
  -moz-transform: translate(5px, -35px) scale(0.6);
  -ms-transform: translate(5px, -35px) scale(0.6);
  -webkit-transform: translate(5px, -35px) scale(0.6);
  transform: translate(5px, -35px) scale(0.6);
}
table{
	margin:0 auto;
}
table .b{
	 color: #ff4a56;
	 
	 
 
  font-weight: 100;
  letter-spacing: 0.01em;
  font-size: 15px;
 
  display: block;
  
  
}
::-webkit-datetime-edit { padding: 1em; }
::-webkit-datetime-edit-fields-wrapper { background: white; }
::-webkit-datetime-edit-text { color: red; padding: 0 0.3em; }
::-webkit-datetime-edit-month-field { color: blue; }
::-webkit-datetime-edit-day-field { color: green; }
::-webkit-datetime-edit-year-field { color: purple; }
::-webkit-inner-spin-button { display: none; }
::-webkit-calendar-picker-indicator { background: orange; }
    </style>

</head>
<body>
<form action="otherinput.php" method="GET" >
<div class="question">
<input type="text" NAME="RNO" value="<?php echo $d?>">
<label><b>Serial Number</b></label>
</div>
<div class="question">
<input type="text" name="BID" required>
<label></b>Blood Bag ID</b></label>
</div>
<br><br>
<div class="question" align="centre">
<table cellspacing="5"><tr><td>
<h4></b>Collection Date:</b></h4></td><td>
<input type="date" name="cd" required></td></tr></table>
</div>
<table><tr><td class='b'>
Blood Group:</td><td><input type="radio" name="GROUP" value="A+" required>A+</td>
            <td><input type="radio" name="GROUP" value="B+" >B+</td>
			<td><input type="radio" name="GROUP" value="AB+">AB+</td>
			<td><input type="radio" name="GROUP" value="O+">O+</td></tr>
			<tr><td></td><td><input type="radio" name="GROUP" value="A-">A-</td>
			<td><input type="radio" name="GROUP" value="B-">B-</td>
			<td><input type="radio" name="GROUP" value="AB-">AB-</td>
			<td><input type="radio" name="GROUP" value="O-">O-<br></td></tr></table>
<br><br>
			<table><tr><td class="b">

Product:    </td><td><input type="radio" name="PRODUCT" value="PCV" required>PCV</td>
            <td><input type="radio" name="PRODUCT" value="FFP">FFP</td>
             <td><input type="radio" name="PRODUCT" value="WHB">WHB</td></tr></table>
 <table><tr><td>              
<input type="submit" value="Submit" class="button"></form></td><td><form action="home.php" method="GET" >
<input type="submit" value="Home" class="button"></form></td></tr></table>

</body>
</html>