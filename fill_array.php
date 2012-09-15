<?php
  // Fill a global array named dataList with values from multiple data files
  // named schedule-xx.csb, where xx is the distinguishing mark of the file.
  
	function fillArray($i,$group,$dateStart,$dateStop,$r_omit,$shortForm)
	{
		if($debug && $shortForm) {
		  echo "this is fill_array" . "<br/>";
		  echo "shortForm is on.<br/>";
		}
		
		global $dataList;

		if ($shortFrom) { $dateFrom  = max($dateStart,time()); }
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
        list( $date,$group,$venue,$action,$note,$end ) =
        explode("\t", $inString);
        
        if($debug) {echo $inString."<br/>";}
    
  		$inDate = strtotime($date);

  		if($inDate > $dateStop) {break;}
  		if ($dateFrom <= $inDate) {
  			if( ! $r_omit OR $action != 'r' ) {
  				$i++;
  				if($debug) {
  					echo "storing data in ".$i." for date ".date('l, F d, g:i a',$date)."<br/>";
            // echo "End date is ".date('l, F d, g:i a',$end)."<br/>";
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
  				  if( ! is_null($end) ){
  					echo "End date is ".date('l, F d, g:i a',$end)."<br/>";}
  					else {echo "No end date" . "<br/>";}
  				}
  			}
  		}
  	}
		fclose($fp);

		if($debug) {
		  echo "Leaving fill_array" . "<br/>";
		  print_r($dataList);
		}

		return $i;
	}
?>
