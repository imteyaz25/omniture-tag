<?php
if(isset($_POST['omniture']) && $_POST['omniture_code']!=''){

	//print htmlentities($_POST['omniture_code']);
	if($_POST['omniture_code']!=''){
		$omniture_code = $_POST['omniture_code'];
		update_option('omniture_code',$omniture_code);
			echo "Code submitted";
		
	}

}
?>


<h3>Omniture Code Interface</h3>
<form method='post' action=''>
<table>
<tr><td>Code:</td><td><textarea name='omniture_code' style="width:500px;height:300px"></textarea></td></tr>
<tr><td></td><td><input type='submit' name='omniture' value='Submit'/></td></tr>
</table>
</form>
