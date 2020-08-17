<?php
$bag=$_GET['b'];
date_default_timezone_set('Asia/Kolkata');
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
	        $sql = "SELECT * from blood where bsr='$bag'";
			$result=$db->query($sql);
			$sql1 = "SELECT ino from blood where ino=(SELECT max(ino) from blood)";
			$result2=$db->query($sql1);
			$ro=$result2->fetchArray(SQLITE3_ASSOC);
			$a=$ro['ino'];
			$a=intval($a)+1;
			$c=0;
			if($a==1){
				$sql2="SELECT * from blood";
				$rs=$db->query($sql2);
				while($q=$rs->fetchArray(SQLITE3_ASSOC)){
					$m=$q["ino"];
					if($m>$c){
						$c=$m;
						
					}
				}$a=$c+1;
			}
			
			$sql = "SELECT * from blood where bno='$bag'";
			$result=$db->query($sql);
	        while($row=$result->fetchArray(SQLITE3_ASSOC)){
			$d=$row["bsr"];
            $day=$row["bdate"];
			$g=$row["gp"];
			$p=$row["pd"];
			 $x=$row["col"];
        
			}
			}
		
?>
<html>
<head>
<title>Issue Blood Bag Info</title>
<style>
      /* NOTE: The styles were added inline because Prefixfree needs access to your styles and they must be inlined if they are on local disk! */
      .transition, form button, form .question label, form .question input[type="text"] {
  -moz-transition: all 0.25s cubic-bezier(0.53, 0.01, 0.35, 1.5);
  -o-transition: all 0.25s cubic-bezier(0.53, 0.01, 0.35, 1.5);
  -webkit-transition: all 0.25s cubic-bezier(0.53, 0.01, 0.35, 1.5);
  transition: all 0.25s cubic-bezier(0.53, 0.01, 0.35, 1.5);
}
h1{
  color: White;
  font-weight: 100;
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
    </style>
</head>
<body>
<form action="issue.php" method="GET" >
<div class="question"><input type="text" name="PName" required>
<label><b>Patient Name</b></label></div>
<div class="question"><input type="text" name="hospital" required>
<label><b>Hospital Name</b></label></div>
<div class="question">
<input type="text" NAME="RNO" value="<?php echo $d?>">
<label><b>Serial No.</b></label></div>
<div class="question"><input  type="text" name="DATE" value="<?php echo $day?>">
<label><b>Date of Arrival</b></label></div>
<div class="question"><input type="text" name="BID" required value="<?php echo $bag?>">
<label><b>Blood Bag ID</b></label></div>
<div class="question"><input type="text" name="GROUP" value="<?php echo $g?>">
<label><b>Group</b></label></div>
            
<div class="question"><input type="text" name="PRODUCT" value="<?php echo $p?>">
<label><b>Product</b></label></div>
            
<div class="question"><input type="text" name="ISSUE" value="<?php echo $a?>">
<label><b>Issue No.</b></label></div>
<div class="question"><input type="text" name="IDATE" value="<?php echo date("d-m-Y h:i:sa")?>">
<label><b>Issue Date</b></label></div> 
<table><tr><td>              
<input type="submit" value="Submit" class="button"></form></td><td><form action="home.php" method="GET" >
<input type="submit" value="Home" class="button"></form></td></tr></table>

</body>
</html>