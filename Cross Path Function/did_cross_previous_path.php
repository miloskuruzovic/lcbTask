<?php

$A = array(1, 1, 2, 2, 3, 3, 4, 4, 5, 5, 3, 1, 5);

function did_cross_previous_path($A)
{
	for ($i=3; $i < count($A); $i++) 
	{ 
		if ($A[$i] >= $A[$i-2] && $A[$i-1] <= $A[$i-3]) 
		{
			return ($i + 1);
		}
		if ($i >= 4) 
		{
			if ($A[$i-1] == $A[$i-3] && $A[$i] >= ($A[$i-2] - $A[$i-4])) 
			{
				return ($i + 1);
			}
		}
		if ($i >= 5) 
		{
			if (
				$A[$i-2] >= $A[$i-4] 
				&& $A[$i] >= ($A[$i-2] - $A[$i-4]) 
				&& $A[$i-1] >= ($A[$i-3] - $A[$i-5])
				&& $A[$i-1] <= $A[$i-3] )
			{
				return ($i + 1);
			}
		}
	}
	return 0;
}

echo did_cross_previous_path($A);


/*
$broj = count($A);

for ($i=3; $i < $broj; $i++) 
{ 
	if ($A[$i] >= $A[$i-2]) 
	{
		if ($A[$i-1] <= $A[$i-3]) 
		{
			echo "Seku se na ". ($i + 1) .". koraku | ";				
		}
	}
	if ($i >= 4) 
	{
		if ($A[$i-1] == $A[$i-3]) 
		{
			if ( $A[$i] >= ($A[$i-2] - $A[$i-4]) ) 
			{
				echo "Seku se na ". ($i + 1) .". koraku | ";
			}
		}
	}
	if ($i >= 5)
	{
		if ($A[$i-2] >= $A[$i-4]) 
		{
			if ($A[$i] >= ($A[$i-2] - $A[$i-4])) 
			{
				if ($A[$i-1] >= ($A[$i-3] - $A[$i-5])) 
				{
					if ($A[$i-1] <= $A[$i-3]) 
					{
						echo "Seku se na ". ($i + 1) .". koraku | ";
					}
				}
			}
		}
	}
}


for ($i=3; $i < count($A); $i++) 
{ 
	if ($A[$i] >= $A[$i-2] && $A[$i-1] <= $A[$i-3]) 
	{
		echo "Seku se na ". ($i + 1) .". koraku | ";
	}
	if ($i >= 4) 
	{
		if ($A[$i-1] == $A[$i-3] && $A[$i] >= ($A[$i-2] - $A[$i-4])) 
		{
			echo "Seku se na ". ($i + 1) .". koraku | ";
		}
	}
	if ($i >= 5) 
	{
		if (
			$A[$i-2] >= $A[$i-4] 
			&& $A[$i] >= ($A[$i-2] - $A[$i-4]) 
			&& $A[$i-1] >= ($A[$i-3] - $A[$i-5])
			&& $A[$i-1] <= $A[$i-3] )
		{
			echo "Seku se na ". ($i + 1) .". koraku | ";
		}
	}
}
*/


 ?>