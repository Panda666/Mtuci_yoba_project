<?php
$i = idate('W');
$i -= 35;
if ( $i  % 2 == 0)
{
	$Para11 = "Англ";
	$Para12 = " ЛАиАГ";
	$Para13 = "ВвП ";
	$Para14;
	$Para21 = " ПиАСИ";
	$Para22 = "ФИЗИЧЕСКАЯ Культура ";
	$Para23 = "ПдЭВМ";
	$Para24 = "Англ";
	$Para31 ;
	$Para32 = "Физика";
	$Para33 = " История " ;
	$Para34 = " ЛАиАГ";
	$Para41;
	$Para42 = "Мат.Ан";
	$Para43 = " ФИЗИЧЕСКАЯ КУЛЬТУРА";
	$Para44 = " Мат.Ан ";
	$Para51;
	$Para52 = " Физика ";
	$Para53;
	$Para54;
if( $i  >=  10 )
	$Para33 = " ";
if ($i  >= 12)
	$Para53 = "История";

}
else
	{
		$Para11 = "Англ";
		$Para12 = " ЛАиАГ";
		$Para13;
		$Para14;
		$Para21 = "ВдЭВМ";
		$Para22 = "ФИЗИЧЕСКАЯ Культура ";
		$Para23 = "ПиАСИ";
		$Para24 = "Англ";
		$Para31 ;
		$Para32 ;
		$Para33 = " РЯиКР " ;
		$Para34 = " ЛАиАГ";
		$Para41;
		$Para42 = "Мат.Ан";
		$Para43 = " ФИЗИЧЕСКАЯ КУЛЬТУРА";
		$Para44 = " Мат.Ан ";
		$Para51 = " РЯиКР ";
		$Para52 = " Физика ";
		$Para53 = " История";
		$Para54;
		if( $i - 35  >= 11)
			$Para32 = " РЯиКР ";
	}
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
	<title>МТУСИ</title>
<meta http-equiv="Content-type" content="text/html">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
<link rel="stylesheet" type="text/css" href="mobile_css.css">
<link rel="stylesheet" type="text/css" href="middle_css.css" media="only screen and (min-width:700px)">
<!-- <link rel="stylesheet" type="text/css" href="big_css.css" media="only screen and (min-width:1280px)"> -->
</head>

<body>
	<div class="Main">
	         <div class="Logo">
	                 <center> <h1>МТУСИ</h1></center>
	         </div>
	         <!-- Main_logo -->

	         <div class="Logo_text">
	                <center> <h2>Расписание <br> БПМ1401 </h2>     </center>

	         </div>
	         <!-- Logo text -->	
	         
	   <div class="taable">
	   
			       <table class="gridtable">     
				         <tr> <th><h3>Понедельник</h3></th></tr>
				         <tr> <td><?=$Para11?> <br></td></tr>
				         <tr> <td><?=$Para12?> <br></td></tr>
				         <tr> <td><?=$Para13?> <br></td></tr>
				         <tr> <td><?=$Para14?> <br></td></tr>
				         <tr> <td><?=$Para15?> <br></td></tr> 
				     
				    </table>
				    <table class="gridtable">     
			              <tr> <th><h3>Вторник</h3></th></tr>
				         <tr> <td><?=$Para21?> <br></td></tr>
				         <tr> <td><?=$Para22?> <br></td></tr>
				         <tr> <td><?=$Para23?> <br></td></tr>
				         <tr> <td><?=$Para24?> <br></td></tr>
				         <tr> <td><?=$Para25?> <br></td></tr>     
				     </table>

			         <table class="gridtable">         
			             <tr> <th><h3>Среда</h3></th></tr>
				         <tr> <td><?=$Para31?> <br></td></tr>
				         <tr> <td><?=$Para32?> <br></td></tr>
				         <tr> <td><?=$Para33?> <br></td></tr>
				         <tr> <td><?=$Para34?> <br></td></tr>
				         <tr> <td><?=$Para35?> <br></td></tr>     
				     </table>
				     <table class="gridtable">	     
			             <tr> <th><h3>Четверг</h3></th></tr>
				         <tr> <td><?=$Para41?> <br></td></tr>
				         <tr> <td><?=$Para42?> <br></td></tr>
				         <tr> <td><?=$Para43?> <br></td></tr>
				         <tr> <td><?=$Para44?> <br></td></tr>
				         <tr> <td><?=$Para45?> <br></td></tr>	     
				     </table>
				     <table class="gridtable">	     
			            <tr> <th><h3>Пятница</h3></th></tr>
				         <tr> <td><?=$Para51?> <br></td></tr>
				         <tr> <td><?=$Para52?> <br></td></tr>
				         <tr> <td><?=$Para53?> <br></td></tr>
				         <tr> <td><?=$Para54?> <br></td></tr>
				         <tr> <td><?=$Para55?> <br></td></tr>     
				     </table> 
				     </div>
				    
				    <!-- table -->  
	       </div>  


	<!-- Main -->

</body>

</html>
