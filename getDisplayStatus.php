<?php
  function getDisplayStatus ($event,$args) {
/*
 * Set limits for displaying text:
 * If the event in in the past (plus allowable slip) when the script runs, it will NOT be displyayed.
 * Allowable slip is set with configuration variable $maxSlip.
 *
 * Paramaters in inarray $event are in strtotime() format
 *   event_date is the time of the event, which is an explicit date/time string
 *   show_from is the time to begin display, explicit or relative to the event date/time (only)
 *   show_until is the time to quit display, explicit or relative to either the event or start display date/time
 * 
 *   Beware of using 'now' for the go date. Now changes as you display the page. 
 *   An end date relative to now will never end. Explicit ends work fine.
 * The second parameter is true|false and turns debugging on or off.
 *
 * Examples:
 * $event = array(
 *   'event_date'   => '5/15/2010 10:00 am',
 *   'show_from'   => '5/14/2010 10:00 am',
 *   'show_until' => '+2 days -4 hours'
 *    );
 * will display from now until 2 days - 4 hours from now (now is when the script runs)
 * 
 * $event = array(
 *   'event_date'   => '5/15/2010 10:00 am',
 *   'show_from'   => '-5 days',
 *   'show_until' => '5/22/2010 1:00 pm'
 *    );
 * will display from 5 days before the event (5/15/2010 10:00 am) until 5/22/2010 1:00 pm
 **/


// require_once 'data-read.php';

$debugCall  = $args['debug']['call'];
$debugEvent = $args['debug']['event'];
$debugStart = $args['debug']['start'];
$debugUntil = $args['debug']['until'];

$maxSlip    = $args['maxSlip'];
$flags      = $args['flags'];


if($debugCall) {
  if(is_array($args['flags']))
  {
  var_dump($args['flags']);
  }
  else
  {
    print 'Trace: '.date('H:i:s').' File: ' . $_SERVER['PHP_SELF'] . ' line: ' . __LINE__  . '<br/>';
    print 'args flags is not an array' . '<br/>';
  }
  print '<h3>parameters</h3>';
  print 'incoming event date/time '.$event['event_date'] . '<br/>';
  print 'incoming start display date/time '.$event['show_from'] . '<br/>';
  print 'incoming stop display date/time '.$event['show_until'] . '<br/>';
  print 'debug passed values: ' . '<br/>';
  var_dump($args['debug']);
}

if($debugCall) {
  print '<h3>Setting configuration</h3>';
} // end debug Call

if(empty($debugUntil)) { $debugUntil=false; } // set debugUntil to default

// you can reset the "current date" for testing 

if (empty($args['debug']['forceDate']))
{  
  $thisDate = strtotime('now');
}  
else
{
  $thisDate = strtotime($args['debug']['forcedDate']);
}

$eventTime = strtotime($event['event_date'])
or die ('Error' . ' (Function ' . __FUNCTION__ . ') on line: ' . __LINE__ . '<br/>'
        . $event['event_date'].' is not a valid date');

$maxDisplay = strtotime($maxSlip,$eventTime); // limit display to period after event

if($debugCall) {
  print 'max slip: '.$maxSlip . '<br/>';
  print 'event date: '.$event['event_date'] . '<br/>';
  print 'Max date/time to display event '.$maxDisplay. ' which is ' .date('l, d M Y g:i a',$maxDisplay) . '<br/>';
  print 'Compare with event time '.date('l, d M Y g:i a',$eventTime) . '<br/>';
}

if($eventTime > strtotime($maxSlip,$eventTime)) { // if event is more than max display time, exit early
  $result = false;
  exit;
}

if($debugCall) {
  print 'Current date is '.date('l, d M Y g:i a',strtotime('now')) . '<br/>';
  if(is_array($event)) {print '$event is an array' . '<br/>';}
  else {print 'Uh-oh. Event is not an array' . '<br/>';}
  print 'event time is '.date('l, d M Y',$eventTime) . '<br/>';
  }

// show from section
if($debugStart) { print '<h2>Evaluate show from</h2>'; }

  $flag = $event['show_from'][0];
  if($debugStart) {
      print 'Display flag in string ('.$event['show_from']. ') is '. $flag . '<br/>';
      if (in_array($flag,$flags)) {
        print 'Start display date/time is relative to event' . '<br/>';
      } else { 
        print 'Start display date/time is explicit' . '<br/>';
        }
      } // end debug

  if (in_array($flag,$flags)) {
    $showFrom = strtotime($event['show_from'],$eventTime);  // relative to event date/time
  } else { 
    $showFrom  = strtotime($event['show_from']); // explicit
    }
  if($debugStart) {
    print 'showFrom set to ' . date('l, d M Y g:i a',$showFrom) . '<br/>';
  } // end debug Start


// show until section
  if($debugUntil) { print '<h2>Evaluate show until</h2>'; }

  $flag = $event['show_until'][0];
  if (in_array($flag,$flags)) {
    $untilExplicit = false;  // date/time is relative to another date    
    } else { 
    $untilExplicit = true;   // date/time is explicit
  }
  if($debugUntil) {
    print 'Incoming string is '.$event['show_until'] . '<br/>';
    print 'Flag in string ('.$event['show_until']. ') is '. $flag . '<br/>';
    if (in_array($flag,$flags)) {
      print 'Stop display date/time is relative to start display' . '<br/>';
    } else { 
      print 'Stop display date/time is explicit' . '<br/>';
      }
    print 'untilExplicit switch is ' . (int)$untilExplicit . '<br/>';
    } // end debug

  if ( ! $untilExplicit) {

    // find out relative to what
    $pieces = explode(',',$event['show_until']);
    $relValue = $pieces[0];
    $relName  = trim($pieces[1]);
    $relDefault = $eventTime;

  if($debugUntil) {
    print '<h3>Parsing show until</h3>';
    print 'incoming string is '.$event['show_until'] . '<br/>';
    print 'part 1: rel value is '.$relValue . '<br/>';
    print 'part 2: rel name is '.$relName . '<br/>';
    print 'default is '. date('l, d M Y',$eventTime) . '<br/>';
  } // end debug

  switch($relName) :
    case 'event':
      $relTo = $eventTime;
      break;
    case 'from':
    case 'display':
    case 'start':
      $relTo = $showFrom;
      break;
    default:
      $relTo = $relDefault;
      if($debugUntil) {print 'no match. using default = ' .date('d M Y g:i a',$relDefault) . '<br/>';}
  endswitch;

  if($debugUntil) {
   print 'incoming date: '.$event['show_until'] . '<br/>';
   print 'relative value part: '.$relValue . '<br/>';
   print 'relative to: '.$relName . '<br/>';
  } // end debug
 }  // end evaluating relative date

    if ($untilExplicit) {
      $showTo  = strtotime($event['show_until']); // set explicit date/time
    } else {
      $showTo = strtotime($relValue,$relTo);      // set relative date/time
    }
    if($debugUntil) {
      print 'raw data: '.$showFrom.' and '.$showTo . '<br/>';
      print 'showTo set to ' . date('l, d M Y g:i a',$showTo) . ' at line: ' . __LINE__ . '<br/>';
    } // end debug Until

    if($debugUntil) {
      print 'after limiting values' . '<br/>';
      print 'showTo set to ' . date('l, d M Y g:i a',$showTo) . ' at line: ' . __LINE__ . '<br/>';

      print 'min test results: '.(int)min($showTo,$maxDisplay) . '<br/>';
    } // end debug Until

    if( $showFrom <= $thisDate  && $thisDate <= $showTo) { // set result
      $result = true; 
    } else { 
      $result = false; 
    } ;

    if($debugUntil) {
      print '<h2>Evaluation complete</h2>';
      print 'Event date ' . date('l, d M Y g:i a',$eventTime) . '<br/>';
      print 'First date to display ' . date('l, d M Y g:i a',$showFrom) . '<br/>';
      print 'Last date to display ' . date('l, d M Y g:i a',$showTo) . ' at line: ' . __LINE__ . '<br/>';
      print 'Result: show event is ' . (int)$result . '<br/>';
      if($result) { 
        print 'Results should print' . '<br/>'; 
        } else {
        print 'Results should NOT print' . '<br/>';
        }
    } // end debug D

    return($result);

} // end of function
?>