<?php
	function checkUDID($udid) 
	{
		$acceptedUDID = array('abcd', 'efgh');
		
		if (in_array($udid, $acceptedUDID))
			return 'YES';
		else
			return 'NO';	
	}
?>