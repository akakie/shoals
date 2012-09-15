<div id="selection">
	<div id="navcontainer">
		<form method="post" action="" >
		<p>
	   <select name="list1">
			<option selected="selected" value="help">Choose date</option>
			<?php foreach ($concert as $event) {
			  echo '<option value="'.date('ymd',$event).'">'.date('M j Y',$event).'</option>';
			}
			?>
		</select>
			<input type="hidden" name="_submit_check" value="1" /> 
			<input type="submit" value="show program" />
		</p>
		</form>
	</div> <!-- navcontainer -->

</div> <!-- end selection -->
