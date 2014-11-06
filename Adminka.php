<?php
include('functions.php');
startup();
if ( (isset($_POST['Para_name']) && isset($_POST['Sensei_name']) && isset($_POST['Auditory'])
		&& isset($_POST['Week_of_start']) && isset($_POST['Week_of_end']) && isset($_POST['Week_type'])
		&& isset($_POST['Para_type']) && isset($_POST['Day_of_week'])) !=" ")
	{
		send_dataInfo($_POST['Table_name'],$_POST['Para_name'],$_POST['Sensei_name'],$_POST['Auditory'],
						$_POST['Week_of_start'],$_POST['Week_of_end'],$_POST['Week_type'],
							$_POST['Para_type'],$_POST['Day_of_week'],$_POST['Para_number']);
	}
else
	echo('Все полня обязательны для заполненя');
?>
<html>
<head>
	<meta content="text/html; charset=utf8" http-equiv="content-type">
</head>
<form method="post" >
Выберете группу:<br>
<select name="Table_name">
<option>BPM1401</option>
</select><br>
Назваие пары: <br>
<input type='text' name='Para_name'><br>
Номер пары: <br>
<input type='text' name='Para_number'><br>
Имя преподавателя: <br>
<input type='text' name='Sensei_name'><br>
Номер аудитории:<br>
<input type='text' name='Auditory'><br>
Номер первой недели:<br>
<input type='text' name='Week_of_start'><br>
Номер последней недели:<br>
<input type='text' name='Week_of_end'><br>
Чётность недели:<br>
<select name='Week_type' >
<option>По чётным</option>
<option>По нечётным</option>
<option>Каждую неделю</option>
</select><br>
Тип занятия:<br>
<select name="Para_type">
<option>Лекция</option>
<option>Практическое занятие</option>
<option>Семинар</option>
<option>Лабораторная</option>
</select><br>
День недели:<br>
<input type='text' name='Day_of_week'><br>
<input type='Submit'>
</form>
</html>
