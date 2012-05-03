<?php
	$acceptedUDID = array('abcd', 'efgh');
	
	function checkUDID($udid) 
	{
		if (in_array($udid, $acceptedUDID))
			return 'YES';
		else
			return 'NO';	
	}
?>