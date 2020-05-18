<?php
	$cur_date = date("d");
	$cur_day = date("w");
	$cur_month = date("m");

	echo "<table id='agenda' class='col-12 m-0'>";
	
	$cur_time =  time()+(60*60*24);
	$closed= true;
	$count = 0;
	$limit = date("t", time());
	$cur_day = 0;
	while($cur_day<$limit)
	{
		if ($count%7 == 0)
		{
			$closed = false;
			echo "</tr>";
			$count = 0;
		}
		if ($closed == false )
		{
			echo "<tr >";
			$closed= true;
		}
				
		if(date("N", $cur_time) == 6 || date("N", $cur_time) == 7)
		{
			echo "<td class='day disabled'></td>";
		}
		else
		{
			echo "<td class='day dayOn ' id='".date("Y-m-d", $cur_time)."'><p class='daydate ' >".date(" Y-m-d D", $cur_time)."</p></td>";
		}

		

		$cur_time = strtotime("+1 day", $cur_time);
		$count++;
		$cur_day ++ ;
	}

	echo "</table>";
?>
