<?php
function print_break_notice($band,$from,$to,$reason) {
  global $theDate;
  $from_date = strtotime($from);
  $to_date   = strtotime($to);

  if ($theDate >= $from_date && $theDate <= $to_date) {
    echo 
    "<dd>The ".$band." band is on " .$reason. " break from "
      .date("F j, Y",$from_date)." through " .date("F j, Y",$to_date).".</dd>";
  };
}  
?> 