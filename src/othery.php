<h1 align="center"><a href="home.php">Blood Bank,Alephata</a></h1>
<style>

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
			$sql3 = "SELECT * from other";
			$result3=$db->query($sql3);
			

			echo '<table class="table-fill"><thead><th class="text-left">Sr</th><th class="text-left">ArrivalDATE</th><th class="text-left">BagID</th><th class="text-left">Group</th><th class="text-left">Product</th><th>ExpiryDate</th></thead><tbody class="table-hover">';
	     while($r=$result3->fetchArray(SQLITE3_ASSOC)){
			
            $x=$r["col"];
            
            $s=date_create(date('d-m-Y'));
            $a=date_create($x);

			$diff=date_diff($s,$a);
            $da=intval($diff->format("%R%a"));//echo $da."<br>";
			
			if(0<$da&&$da<5){
			echo '<tr><td class="text-left">'.$r["bsr"].'</td><td class="text-left">'.$r["bdate"].'</td><td class="text-left">'.$r["bno"].'</td><td class="text-left">'.$r["gp"].'</td><td class="text-left">'.$r["pd"].'</td><td class="text-left">'.$r["col"]."</td></tr>";
			}}
            echo"</tbody></table>";
			
			}

	?>