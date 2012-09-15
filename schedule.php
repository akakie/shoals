<?php
  // Configure page for specific report
  $pageTitle    ="Schedule Listing";
  $pageContent  ="Schedule for rehearsals and concerts.";
  $pageKeywords ="concerts, rehearsals, exceptions";
  $pageStyle    ="";
  $dataFile     = true;  //true|false or file name if only one file
  $sortTable    = false;  //true|false
  $download     = false;  //true|false
  
  require_once 'site.inc';  // site-wide definitions

	// Add local configuration
	$r_format = $dateFormat;                     # define format once for consistency

  $debug=false;                                     # set debug mode (or not)
	$testDate = strtotime('jul 26 2007 6 pm');       # set to a test date for debug

  require_once('schedule-events.php');             # get the scheduling data
  require_once("print-event.inc");
  require_once('venue-list.inc');
  
?>

<?php // configure this page
	
	$dateStart = $season['start'];
	$dateStop  = $season['end'];
	$r_omit    = true; // omit rehearsal detail
	$shortForm = true;  // only show dates after today

?>

<?php
	function fillArray($i,$group,$dateStart,$dateStop,$r_omit,$shortForm)
	{
		$debug = false;
		if($debug && $shortForm) {echo "shortForm is on.<br/>";}
		
		global $dataList;
		if ($shortForm) { $dateFrom  = max($dateStart,time()); }
		else {$dateFrom = $dateStart;}
		
		$dataFile = 'schedule-'.$group.'.csv';
		if(($fp = fopen($dataFile, "r")) == false) {
		     die("Can't open data file '$dataFile'.\n");
		}
		if($debug) {
			echo "file is open at ".$i." for ".date('d F Y',$dateStart)." thru ". date('d F Y',$dateStop)."<br/>";
			}
		
		if($debug) {echo "debug is on.<br/>";}
    while($inString = read_file_line($fp)) {
        list( $date,$venue,$action,$note,$end ) =
        explode("\t", $inString);
        
        if($debug) {echo $inString."<br/>";}
    
  		$inDate = strtotime($date);

  		if($inDate > $dateStop) {break;}
  		if ($dateFrom <= $inDate) {
  			if( ! $r_omit OR $action != 'r' ) {
  				$i++;
  				if($debug) {
  					echo "storing data in ".$i." for date ".date('l, F d, g:i a',$date)."<br/>";
  					echo "End date is ".date('l, F d, g:i a',$end)."<br/>";
  				}
  				if( ! is_null($end) ) { $end = strtotime($end); }
  				$dataList[$i] = 
  				array(
  					'date'   => $inDate,
  					'group'  => $group,
  					'venue'  => $venue,
  					'action' => $action,
  					'note'   => $note,
  					'end'    => $end
  					);
  				if($debug) {
  					echo "End date is ".date('l, F d, g:i a',$end)."<br/>";
  				}
  			}
  		}
  	}
		fclose($fp);
		if($debug) {print_r($dataList);}
		return $i;
	}
?>

<?php
	$i = -1;

  foreach ($groupList as $gp => $name) {
  	$result = fillArray($i,$gp,$dateStart,$dateStop,$r_omit,$shortForm);
  	$i = $result;          

  }

	asort($dataList);

?>
<?php
  // Add local configuration for the page
  $pageNotes = 
    '<h2>ToDo List</h2>
    <p>For this page</p>
    <ul>
      <li>Need list of venues</li>
      <li>Need concert dates and locations</li>
      <li>Need season cycle dates</li>
    </ul>
    <p>For information on how weather affects rehearsals, select
	  <q>Rehearsal notes</q> from the menu bar.</p>
    ';
  require_once 'page-sidebar.inc';
?>
	
  <div id="content">
    <div id="introduction">

		</div>
		
		<div id="Events">
			<h1 id="scheduled_events">Scheduled Events</h1>
			<h2 id="dates">From <?php echo date('j M Y',$dateStart)." through ".date('j M Y',$dateStop);?>
  			<?php if($shortForm) {echo "<br/>Remaining after today";} ?>
			  </h2>
		</div>

		<?php
    // $venue_list['carpet'][0]
		$debug = false;
				if ($r_omit) {	
					echo "<p>Unless otherwise noted, the band rehearses
					every Tuesday, 7:00-8:30 PM at ".$addressRehearsal.". 
					Rehearsals which conform to this schedule are omitted. 
					</p>"
				;}
				
				if($debug) {print_r($dataList);}
  			echo "<dl>";
			
			foreach ($dataList as $key => $event) {
				echo "<dt>".date($r_format,$event['date']);
				if($event['end'] >= $dateStart) {
				echo " through ".date('F d, Y',$event['end']);
				}
				echo "</dt>"
				."<dd>"
				.$eventTypes[$event['action']]." for ".$groupList[$event['group']];
        if( $event['action'] != 'x' ) {
          if(null != $venue_list[trim($event['venue'])][1]) {
            echo " at "
            .'<a '
            .'title="Map and driving directions" '
            .'href="http://tinyurl.com/'
            .$venue_list[trim($event['venue'])][1]
            .'">'
            .$venue_list[trim($event['venue'])][0]
            .'</a>'
            ;}
          else {
            echo  " at "
            .$venue_list[trim($event['venue'])][0]
            .', '
            .$venue_list[trim($event['venue'])][2] ;
          }
        }
				echo "<br/>"
				.$event['note']."<br/>"
				."</dd>"
				;
			}
			echo "</dl>";
		?>
		
		
<?php require_once ("page-end.inc"); ?>