<html>
<head>
<style>
h1{
  color: red;
  font-weight: 100;
  letter-spacing: 0.01em;
  margin-left: 15px;
  margin-bottom: 35px;
  
  text-align:center;
}
h2{
  color: green;
  font-weight: 100;
  letter-spacing: 0.01em;
  margin-left: 15px;
  margin-bottom: 35px;
  
  text-align:center;
}
form {
  position: relative;
  display: inline-block;
  max-width: 700px;
  min-width: 500px;
  box-sizing: border-box;
  padding: 10px 5px;
  background-color: white;
  border-radius: 40px;
  margin: 5px 0;
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
  margin-top: 10px;
  background-color: #ff4a56;
  border: 1px solid #ff4a56;
  line-height: 0;
  font-size: 17px;
  display: inline-block;
  box-sizing: border-box;
  padding: 20px 15px;
  border-radius: 60px;
  color: white;
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
  margin-top: 10px;
}
form .question input[type="text"]:valid {
  margin-top: 10px;
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
table#t1{
	     background: white;
		border:none;
}
td#t1{
	     background: white;
		border:none;
}

div.table-title {
   display: block;
  margin: auto;
  max-width: 600px;
  padding:5px;
  width: 100%;
}

.table-title h3 {
   color: #fafafa;
   font-size: 10px;
   font-weight: 40;
   font-style:normal;
   font-family: "Roboto", helvetica, arial, sans-serif;
   text-shadow: -1px -1px 1px rgba(0, 0, 0, 0.1);
   text-transform:uppercase;
}


/*** Table Styles **/

.table-fill {
  background: white;
  border-radius:3px;
  border-collapse: collapse;
  height: 220px;
  margin: auto;
  max-width: 100px;
  padding:5px;
  width: 100%;
  box-shadow: 0 5px 10px rgba(0, 0, 0, 0.1);
  animation: float 5s infinite;
}
 
th {
  color:#D5DDE5;;
  background:#1b1e24;
  border-bottom:4px solid #9ea7af;
  border-right: 1px solid #343a45;
  font-size:18px;
  font-weight: 100;
  padding:10px;
  text-align:left;
  text-shadow: 0 1px 1px rgba(0, 0, 0, 0.1);
  vertical-align:middle;
}

th:first-child {
  border-top-left-radius:3px;
}
 
th:last-child {
  border-top-right-radius:3px;
  border-right:none;
}
  
tr {
  border-top: 1px solid #C1C3D1;
  border-bottom-: 1px solid #C1C3D1;
  color:#666B85;
  font-size:16px;
  font-weight:normal;
  text-shadow: 0 1px 1px rgba(256, 256, 256, 0.1);
}
 
tr:hover td {
  background:#4E5066;
  color:#FFFFFF;
  border-top: 1px solid #22262e;
}
 
tr:first-child {
  border-top:none;
}

tr:last-child {
  border-bottom:none;
}
 
tr:nth-child(odd) td {
  background:#EBEBEB;
}
 
tr:nth-child(odd):hover td {
  background:#4E5066;
}

tr:last-child td:first-child {
  border-bottom-left-radius:3px;
}
 
tr:last-child td:last-child {
  border-bottom-right-radius:3px;
}
 
td {
  background:#FFFFFF;
  padding:10px;
  text-align:center;
  vertical-align:middle;
  font-weight:300;
  font-size:18px;
  text-shadow: -1px -1px 1px rgba(0, 0, 0, 0.1);
  border-right: 1px solid #C1C3D1;
}

td:last-child {
  border-right: 0px;
}

th.text-left {
  text-align: center;
}


td.text-left {
  text-align: center;
}

</style>
</head>
<body>
<?php
echo'<h1><a href="home.php">Blood Bank,Alephata</a></h1>';

echo"</style>";
class MyDB extends SQLite3{
		   function __construct(){
			   $this->open('F:\rest.db');
		   }
	   }
	  // echo "Hey<br>";
	   $db = new MyDB();
	   if(!$db){
	   echo $db->lastErrorMsg();}
		else{   
			$b=$_GET['BID'];
			//echo $b;
			$s=$_GET['ISSUE'];
			//echo $s;
			$d=$_GET['IDATE'];
			//echo $d;
			$a=$_GET['PName'];
			$h=ucwords($_GET['hospital']);
			$a=ucwords($a);			
			//echo $a;
	        $sql2 = "UPDATE blood set ino='$s',idate='$d',pn='$a',ho='$h' where bno='$b'";
			$db->exec($sql2);
			$sql = "SELECT * from blood where bno='$b'";
			$result=$db->query($sql);
			
	        while($row=$result->fetchArray(SQLITE3_ASSOC)){
			echo '<table><tr><th>Serial No:</th><td>'.$row["bsr"]."</td></tr><tr><th>Arrival Date</th><td>".$row["bdate"]."</td></tr><tr><th>Bag No.</th><td>".$row["bno"]."</td></tr><tr><th>Group</th><td>".$row["gp"]."</td></tr><tr><th>Product</th><td>".$row["pd"]."</td></tr><tr><th>Issue No.</th><td>".$row["ino"]."</td></tr><tr><th>Issue Date</th><td>". $row["idate"]."</td></tr><tr><th>PatientName</th><td>". $row["pn"]."</td></tr><tr><th>Hospital</th><td>".$row["ho"]."</td></tr>";	
			}
            echo"</table><h2>Operation Successful</h2> "	;
		   // echo "Heyy2";
}
?>