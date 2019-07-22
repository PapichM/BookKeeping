<!-- В цикле вывести результат SQL запроса к БД с полями -->
<div>
	<table>
		<tr>
			<?php  
			for ($i=0; $i < $countFields; $i++) 
			{ 
				echo"<th>{$fields[$i]['Field']}</th>";
			}
			?>
		</tr>

		<?php
		foreach ($mass as $key => $value) 
		{
			echo "<tr>";
			foreach ($value as $k => $v) 
			{	
				echo "<td>{$v}</td>";
			}
			echo "</tr>";
		}
		?>
	</table>
</div>





<style type="text/css">
/* Стили CSS для отображения таблицы */
table {
font-family: "Lucida Sans Unicode", "Lucida Grande", Sans-Serif;
font-size: 14px;
border-radius: 10px;
border-spacing: 0;
text-align: center;
}
th {
background: #BCEBDD;
color: #12161C;
text-shadow: 0 1px 1px #2D2020;
padding: 10px 20px;
}
th, td {
border-style: solid;
border-width: 0 1px 1px 0;
border-color: white;
}
th:first-child, td:first-child {
text-align: left;
}
th:first-child {
border-top-left-radius: 10px;
}
th:last-child {
border-top-right-radius: 10px;
border-right: none;
}
td {
padding: 10px 20px;
background: #F8E391;
}
tr:last-child td:first-child {
border-radius: 0 0 0 10px;
}
tr:last-child td:last-child {
border-radius: 0 0 10px 0;
}
tr td:last-child {
border-right: none;
}
</style>