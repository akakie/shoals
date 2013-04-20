<?php
function print_event($event,$venue) {
  echo date("l, F d, g:i a",$event[0]).". ";

  if(!$event[2] == 'x') {
    echo " at ". 
    '<a title="Map and driving directions" href="http://tinyurl.com/">'.$venue[trim($event[1])][0].'</a>.';
    }
		echo $event[3]." ";
  }
?>