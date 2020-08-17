<h1 align="center"><a href="home.php">Blood Bank,Alephata</a></h1>
<style>

h1{
  color: Black;
  font-weight: 100;
  letter-spacing: 0.01em;	 	
  margin-left: 15px;
  margin-bottom: 35px;
  
  text-align:center;
}
h2{
  color: Black;
  font-weight: 100;
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


</style>
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
			$db = new MyDB();/*
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
            echo"</table>"."<h2>Total FFP:".$j."</h2>";
            echo"</table>"."<h2>Total PCV:".$i."</h2>";
            echo"</table>"."<h2>Total WHB:".$k."</h2>";
            echo"</table>"."<h2>Total BAGS:".$t."</h2>";*/
			$sql3 = "SELECT * from blood";
			$result3=$db->query($sql3);
			$i=0;

			echo '<table class="table-fill"><thead><th class="text-left">Sr</th><th class="text-left">ArrivalDATE</th><th class="text-left">BagID</th><th class="text-left">Group</th><th class="text-left">Product</th><th>ExpiryDate</th></thead><tbody class="table-hover">';
	     while($r=$result3->fetchArray(SQLITE3_ASSOC)){
			
            $x=$r["col"];
            
            $s=date_create(date('d-m-Y'));
            $a=date_create($x);

			$diff=date_diff($s,$a);
            $da=intval($diff->format("%R%a"));//echo $da."<br>";
			
			if($da<0&&$r["pn"]==NULL){
			echo '<tr><td class="text-left">'.$r["bsr"].'</td><td class="text-left">'.$r["bdate"].'</td><td class="text-left">'.$r["bno"].'</td><td class="text-left">'.$r["gp"].'</td><td class="text-left">'.$r["pd"].'</td><td class="text-left">'.$r["col"]."</td></tr>";$i++;
			}}
            echo"</tbody></table><h1>Total Expired Bags:".$i."</h1>";
			
			}

	?>