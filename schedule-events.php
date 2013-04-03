<?php
// Support functions for scheduling.
function get_schedule($dataFile,$theDate,$debug) {
global $n_rehearsals,$n_remaining,$have_rehearsal,$have_concert,$cycle,$concert,$rehearsal,$note;
require_once 'data-read.inc';

$key            = 0;
$n_rehearsals   = 0;
$n_remaining    = 0;
$have_rehearsal = 0;
$have_concert   = false;
$cycle          = 0;
$rTypes = array('r','y' );


if(($fp = fopen($dataFile, "r")) == false) {
     die("Can't open data file '$dataFile'.\n");
}


while($inString = read_file_line($fp)) {
    list( $date,$venue,$action,$note ) =
    explode("\t", $inString);

  $date = strtotime($date);
  
  if(!$have_concert) {
    if($debug) {echo $inString."<br/>";}
    if($action == "c") {
      $cycle++;
      if($date < $theDate) $n_rehearsals = 0;
      }
    elseif (in_array($action,$rTypes)) {
      $n_rehearsals++;
      if($debug) {echo "Counted ".$n_rehearsals."<br/>";}
      }
    }

  if($date >= $theDate) {                                     # ignore everything before start date
    if($action == "c" && !$have_concert) {                    # found the next concert
      $have_concert = true;
      $concert = array(0 => $date,$venue,$action,$note);      # note concert date
      if($debug) {echo "Found concert ".$concert[3]." on " .date("l, F d, g:i a",$date) ."<br/>";}
      }
    elseif(in_array($action,$rTypes)) {                                  # found a rehearsal
      if(!$have_rehearsal) {                                  # this is next rehearsal
        $have_rehearsal = $n_rehearsals;
        $rehearsal = array(0 => $date,$venue,$action,$note);
        if($debug) {echo "Found rehearsal ".$rehearsal[3]." on " .date("l, F d, g:i a",$date) ."<br/>";}
      }
      if($have_rehearsal && !$have_concert) {$n_remaining++;} # count as remaining before concert
    }
  }

}
fclose($fp);
?>
<?php
  if ($debug) { # debug
    echo "<p>";
    echo "The test date is " . date('l, F d, g:i a',$theDate);
    echo "</p>";
    echo "<p>";
    if(!have_concert) {
      echo "Number of rehearsals in cycle ".$cycle.": ".$n_rehearsals."<br/>";
      echo "Rehearsals remaining before concert: " . $n_remaining ."<br/>";
      }
    if($have_rehearsal) {
      echo "Next rehearsal is " . date('l, F d, g:i a',$rehearsal[0])." ".$rehearsal[3]."<br/>";
    }
    else {
      echo "No more rehearsals are scheduled.<br/>";
    }

    if($have_concert) {
      echo "Next concert is ".$concert[3]." " . date('l, F d, g:i a',$concert[0]) . "<br/>";
    }
    else {
      echo "No more concerts are scheduled.<br/>";
    }

    echo "</p>";
    }
  }
?>