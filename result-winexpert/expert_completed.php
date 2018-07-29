<!DOCTYPE html>
<html>
<head>
	<title>WinComp</title>
</head>
<body>
<?php 
$name=array();
$college=array();
$year=array();
$stud_individual_id=array();
$name_1=array();
$college_1=array();
$year_1=array();
$stud_individual_id_1=array();
$temp="'";
$conn=mysql_connect("192.182.183.13","sasurie","sasurieinfotech");
mysql_select_db('tezfuerza',$conn);

///Event not completed code ....
$query="SELECT centerlised_table.stud_individual_id,centerlised_table.name,centerlised_table.college,centerlised_table.year FROM `centerlised_table` left join `winexpert`on (centerlised_table.`win_expert`='*'&& `winexpert`.`completed`='*')&&(centerlised_table.`stud_individual_id`= `winexpert`.`stud_individual_id`) where `winexpert`.stud_individual_id is null &&  centerlised_table.`win_expert`='*';";






$result=mysql_query($query,$conn);
while ($row=mysql_fetch_array($result)) {
	$name[]=$row['name'];
	$college[]=$row['college'];
	$year[]=$row['year'];
	$stud_individual_id[]=$row['stud_individual_id'];
}
$i=count($stud_individual_id);
$j=0;
while ( $j< $i) {
	echo "$stud_individual_id[$j]  ----->$name[$j]   <br>";
	$j++;
}

//Event completed code...
$query_1="select stud_individual_id from winexpert where completed='*';";
$result_1=mysql_query($query_1,$conn);
while ($row=mysql_fetch_array($result_1)) {
$stud_individual_id_1[]=$row['stud_individual_id'];
}
$i_1=count($stud_individual_id_1);
$j_1=0;
while ($j_1<$i_1) {
	$query="select name,college,year from centerlised_table where stud_individual_id=$temp$stud_individual_id_1[$j_1]$temp;";
	
	$result=mysql_query($query,$conn);
	while ($row=mysql_fetch_array($result)) {
		$name_1[]=$row['name'];
		$college_1[]=$row['college'];
		$year_1[]=$row['year'];
		
	}
	$j_1++;
}
echo '
 <html>
<head>
	<title>sasurie</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/27.1.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    
</head>
<body background="images/185.jpg.jpg">
	
<header id="header">
<nav class="navbar navbar-default navbar-fixed-top" id="navbar" role="banner">
<div class="navbar-header"><button class="navbar-toggle" data-target=".navbar-collapse" data-toggle="collapse" type="button">
<span class="sr-only">Toggle navigation</span></button>

<a class="navbar-brand" href="index.html"> <img src="images/sasurie.jpg"  id="image"> </a>
</div>

<div class="collapse navbar-collapse navbar-right" id="text">
<h1>Tezfuerza~2018</h1>

</div>
</nav>
</header>
<div class="log"><button class="btn-success btn rounded">login</div>

<div id="main">
<div class="row">

<div>
<div class="col-xs-6" id="left">
<h1><font size="5"><center>Event completed</center></font></h1>
<div class="scroll">
<table border="1" width="90%" id="tab1">


<tr>
<td>S-id</td>
<td>Name</td>
<td>College</td>
<td>Year</td> 
</tr>';
//var_dump($stud_individual_id_1);
$j_1=0;
while ($j_1 < $i_1) {
	//echo "$stud_individual_id_1[$j_1]----->$name[$j_1] <br>";
	echo "<tr>";
	echo "
	<td>$stud_individual_id_1[$j_1]</td>
	
	";
	echo "
	<td>$name_1[$j_1]</td>
	
	";
	echo "
	<td>$college_1[$j_1]</td>
	
	";
	echo "
	<td>$year_1[$j_1]</td>
	
	";
	echo "</tr>";
	$j_1++;
}

echo ';
</table>
</div>
</div>
</div>
<div>
<div class="col-xs-6" id="right">
<div class="head"><h1><font size="5">Event not completed</font></h1></div>

<div class="scroll">
<table border="1" width="90%" id="tab2">


<tr>
<td>S-id</td>
<td>Name</td>
<td>College</td>
<td>Year</td> 
</tr>';


$j=0;
while ($j<$i) {
	//echo "$stud_individual_id_1[$j_1]----->$name[$j_1] <br>";
	echo "<tr>";
	echo "
	<td>$stud_individual_id[$j]</td>
	
	";
	echo "
	<td>$name[$j]</td>
	
	";
	echo "
	<td>$college[$j]</td>
	
	";
	echo "
	<td>$year[$j]</td>
	
	";
	echo "</tr>";
	$j++;
}

echo '
</table>
</div>
</div>
</div> 
</div>
</div>';
echo ';
<div class="result">
<button class="btn-warning">Explore Result</button>
</div>

 


</body>
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
</html>';
?>
</body>
</html>



