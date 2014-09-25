<?
$Para11;
$Para12;
$Para13;
$Para14;
$Para21;
$Para22;
$Para23;
$Para24;
$Para31;
$Para32;
$Para33;
$Para34;
$Para41;
$Para42;
$Para43;
$Para44;
$Para51;
$Para52;
$Para53;
$Para54;
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
<meta http-equiv="Content-style-type" content="text/css">
<link rel="stylesheet" type="text/css" href="myCss.css">
</head>

<body>

<div class="Wrap">
	<div class="Main">
	         <div class="Logo">
	                 <center> <h1>МТУСИ</h1></center>
	         </div>
	         <!-- Main_logo -->

	         <div class="Logo">
	                <center> <h2>Расписание <br> БПМ1401 </h2>     </center>

	         </div>

	         <div class="table">
	         <table class="gridtable">

	         <tr>
	            <th>Пара</th>
	         	<th>Понедельник</th>
	         	<th>Вторник</th>
	         	<th>Среда</th>
	         	<th>Четверг</th>
	         	<th>Пятница</th>
	         </tr>

	         <tr>
	         <td>9.30-11.05</td>
	         <td> <?=$Para11?></td>
	         <td><?=$Para21?></td>
	         <td> <?=$Para31?></td>
	         <td> <?=$Para41?></td>
	         <td><?=$Para51?> </td>
	         </tr>

	         <tr>
	         <td>11.15-12.50</td>
	         <td><?=$Para12?></td>
	         <td><?=$Para22?></td>
	         <td><?=$Para32 ?></td>
	         <td><?=$Para42 ?></td>
	         <td><?=$Para52 ?></td>
	         </tr>

	         <tr>
	         <td>13.00-14.35</td>
	         <td><?=$Para13 ?></td>
	         <td><?=$Para23 ?></td>
	         <td><?=$Para33 ?></td>
	         <td><?=$Para43 ?></td>
	         <td><?=$Para53 ?></td>
	         </tr>

	         <tr>
	         <td>15.00-16.30</td>
	         <td><?=$Para14 ?></td>
	         <td><?=$Para24  ?></td>
	         <td><?=$Para34 ?></td>
	         <td><?=$Para44 ?></td>
	         <td><?=$Para54 ?></td>
	         </tr>

	         <tr>
	         <td>16.40-18.10</td>
	         <td> <br>-<br> </td>
	         <td>  - </td>
	         <td>  - </td>
	         <td>  - </td>
	         <td> -  </td>
	         </tr>


	         </table>
	         <!-- Table -->


	         </div>
	         <!-- Second_logo -->

	</div>
	<!-- Main -->

</div>
<!-- Wrap -->

</body>

</html>
