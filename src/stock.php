<?php
echo'<h1><a href="home.php">Blood Bank,Alephata</a></h1>';

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
			$ab=0;
			$op=0;
			$an=0;
			$bn=0;
			$abn=0;
			$on=0;
			$t=0;
			while($r=$result->fetchArray(SQLITE3_ASSOC)){
			 $x=$r["col"];
            
            $s=date_create(date('d-m-Y'));
            $a=date_create($x);

			$diff=date_diff($s,$a);
            $da=intval($diff->format("%R%a"));
			if($r!=null&&$r["ino"]==null&&0<=$da){
			if($r['gp']=="A+"){
			$i++;}
			elseif($r['gp']=="B+"){
				$j++;
			}
			elseif($r['gp']=="AB+"){
				$ab++;
			}
			elseif($r['gp']=="O+"){
				$op++;
			}
			elseif($r['gp']=="A-"){
				$an++;
			}
			elseif($r['gp']=="B-"){
				$bn++;
			}
			elseif($r['gp']=="AB-"){
				$abn++;
			}
			else{
				$on++;
			}$t++;}}
            echo'<table><tr><th>A+</th><td>'.$i."</td></tr><tr><th>B+</th><td>".$j."</td></tr><tr><th>AB+</th><td>".$ab."</td></tr><tr><th>O+</th><td>".$op."</td></tr><tr><th>A-</th><td>".$an."</td></tr><tr><th>B-</th><td>".$bn."</td></tr><tr><th>AB-</th><td>".$abn."</td></tr><tr><th>O-</th><td>".$on."</td></tr><tr><th>Total</th><td>".$t."</td></tr></table>";	}
			

	
?>
<html>
<style>

table{
	margin:0 auto;
	border:1px solid black;
}
table .b{
	 color: #white;
	 
	 
 
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
  color:black;;
  background:White;
  font-size:18px;
  font-weight: 600;
  padding:10px;
  text-align:left;
  text-shadow: 0 1px 1px rgba(0, 0, 0, 0.1);
  vertical-align:middle;
  border:1px solid black;
  text-align:center;
}


  
tr {
	border:1px solid black;
  color:black;
  font-size:16px;
  font-weight:normal;
  text-shadow: 0 1px 1px rgba(256, 256, 256, 0.1);
}
 
td {
	border:1px solid black;
  background:#FFFFFF;
  padding:10px;
  text-align:center;
  vertical-align:middle;
  font-weight:600;
  font-size:18px;
   text-align:center;
 }
h1{
  color: Black;
  font-weight: 100;
  letter-spacing: 0.01em;	 	
  margin-left: 15px;
  margin-bottom: 35px;
  
  text-align:center;
}
</style>
</html>