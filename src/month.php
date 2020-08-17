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
h3{
  color: red;
  font-weight: 600;
  letter-spacing: 0.01em;
  margin-left: 15px;
  margin-bottom: 35px;
  
  text-align:center;
}
h4{
  color: black;
  font-weight: 600;
  letter-spacing: 0.01em;
  margin-left: 15px;
  margin-bottom: 35px;
  
  text-align:center;
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
 
}
 
th {
  color:black;
  background:white;
  border-bottom:3px solid black;
  border-top:3px solid black;
  border-right: 3px solid black;
   border-left: 3px solid black;
  font-size:20px;
  font-weight: 550;
  padding:10px;
  text-align:left;
 
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
  border-top: 1px solid black;
  border-bottom-: 1px solid black;
  border-right: 3px solid black;
  border-left: 3px solid black;
  color:black;
  font-size:16px;
  font-weight:normal;
  text-shadow: 0 1px 1px rgba(256, 256, 256, 0.1);
}
 

 
td {
  background:#FFFFFF;
  color:black;
  padding:10px;
  text-align:center;
  vertical-align:middle;
  font-weight:300;
  font-size:18px;
  border-bottom:1px solid black;
 
  border-right: 1px solid black;
}


th.text-left {
  text-align: center;
}


td.text-left {
  text-align: center;
}
div.table-title {
   display: block;
  margin: auto;
  max-width: 600px;
  padding:5px;
  width: 100%;
}
table#t1{
	     background: white;
		border:none;
}
td#t1{
	     background: white;
		border:none;
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
<h1><a href="home.php">Blood Bank,Alephata</a></h1>

<div class="question" style="text-align:centre;">
<table cellspacing="5" id="t1"><tr><td align="center" id="t1">
<form action="month.php" method="GET">
<h3></b>Enter Month and Year:</b></h3></td><td id="t1">
<input type="month" name="month" required></td><td id="t1"><input type="submit"></td></tr></form></table>
</div>
<?php

if(isset($_GET["month"]))
{
$s=$_GET["month"];


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
	        $sql = "SELECT * from blood";
			$result=$db->query($sql);
			
			$i=0;
			$j=0;
			$k=0;
			$t=0;
			while($r=$result->fetchArray(SQLITE3_ASSOC)){
			$date=explode('-',$r["bdate"]);
			$q[0]=$date[2];
			$q[1]=$date[1];
			$e=implode('-',$q);
			if($s==$e){
			if($r['pd']=="PCV"){
			$i++;}
			elseif($r['pd']=="FFP"){
				$j++;
			}
			else{
				$k++;
			}$t++;}}
            echo"</table>"."<h4>Total FFP:".$j."</h4>";
            echo"</table>"."<h4>Total PCV:".$i."</h4>";
            echo"</table>"."<h4>Total WHB:".$k."</h4>";
            echo"</table>"."<h4>Total BAGS:".$t."</h4>";
			$sql3 = "SELECT * from blood";
			$result3=$db->query($sql3);
			
			echo '<table class="table-fill"><thead><th class="text-left">Sr</th><th class="text-left">CollectionDay</th><th class="text-left">BagID</th><th class="text-left">Group</th><th class="text-left">Product</th><th class="text-left">Issue No.</th><th class="text-left">IssueDATE</th><th class="text-left">PatientName</th><th>HospitalName</th><th>ExpiryDate</th></thead><tbody class="table-hover">';
	        while($r=$result3->fetchArray(SQLITE3_ASSOC)){
				$date=explode('-',$r["bdate"]);
			$q[0]=$date[2];
			$q[1]=$date[1];
			$e=implode('-',$q);
			if($s==$e){
			echo '<tr><td class="text-left">'.$r["bsr"].'</td><td class="text-left">'.$r["bdate"].'</td><td class="text-left">'.$r["bno"].'</td><td class="text-left">'.$r["gp"].'</td><td class="text-left">'.$r["pd"].'</td><td class="text-left">'.$r["ino"].'</td><td class="text-left">'. $r["idate"].'</td><td class="text-left">'. $r["pn"].'<td class="text-left">'. $r["ho"].'</td><td class="text-left">'. $r["col"]."</td></tr>";
			}}
            echo"</tbody></table>";}
			
}
	
?>
</body>
</html>