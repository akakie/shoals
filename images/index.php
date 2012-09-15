
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>

<?php
  require_once 'site.cfg';  // configuration for client (sort of)

  // Configure page headers
  $pageTitle    =
  "A wind and percussion ensemble in Sheffield, Alabama, conducted by James Ed Champion";
  $pageContent  =
  "Shoals Community Band, wind and percussion ensemble in Sheffield, Alabama, conducted by James Ed Champion";
  $pageKeywords =
  "Shoals Community Band, wind and percussion ensemble in Sheffield, Alabama, conducted by James Ed Champion";
  $pageStyle    ="program.css";
  $dataFile     ="";

  require_once 'page-meta-links-v2.php';
  
?>

<!-- add additional scripts and style sheets -->
<!-- add php functions -->
<?php
  if($dataFile != '') { // optional function to read a line of data
    require_once 'data-read.php';
  }
?>
<?php

	// Add local configuration
  
  $debug=false;                                     # set debug mode (or not)
	$testDate = strtotime('dec 8 2007 6 pm');         # set to a test date for debug
    
  require_once 'fill_array.php';
  require_once 'schedule-events.php';
  
  $dateStart = $season['start'];
	$dateStop  = $season['end'];
	$r_omit    = true; // omit rehearsal detail
	$shortForm = true;  // only show dates after today
	
?>

<!-- set up jquery and plugins -->
  <link rel="stylesheet" href="/themes/blue/style.css" 
   type="text/css" id="theme" media="print, projection, screen" />

  <script type="text/javascript" src="jq/jquery.js"></script>
  <script type="text/javascript" src="jq/jquery.metadata.js"></script>
  <script type="text/javascript" src="jq/jquery.columnfilters.js"></script>
  <script type="text/javascript" src="jq/jquery.tablesorter.js"></script>

  <script type="text/javascript" charset="utf-8">
    $(document).ready(function() { 
      $("table#library")
             .columnFilters()
      $("table")
        .tablesorter({
          sortList:[[1,0],[2,0],[3,0]],  
          fixedWidth:false,
          widgets: ['zebra']
          })
      });
  </script>

</head>

<body id="page-body">
  <?php require_once ("page-banner.php"); ?> <!-- banner == header -->

  <div id="colmask">
    <div id="colmid">
      <div id="columns">  <!-- this is the right sidebar == columns -->
        <div id="col1wrap">
	        <div id="col1pad">
            <div id="content"> <!-- this is page content ==  col1 -->

    <div id="introduction">
      
      <p>
        <img src="/images/home_photos.jpg" alt="Local scene" >
      </p>

      <p>The <?php echo $org; ?> is a wind and percussion ensemble for adult musicians. We are
      active year around and perform in a variety of places in our area. Our purpose is to
      provide an opportunity for adults to continue making music beyond the high school and
      college years, and to pass our enjoyment of live music on to the community in which we
      perform. See the introduction page for more information about our members, our music, and
      how to join.</p>
	<?php
	  if($debug) {
			$theDate = $testDate;                     # use the debug date
	    echo "<div class='debug>";
	    echo "Debug: ".
	    "test date is ".date($dateFormat,$theDate).".<br/>";
	    echo "</div>";
	    }
	  else {
	    $theDate = time();
	  }
	?>

  </div>  <!-- end of introduction -->
  <dl>
  <?php
    $theTime   = strtotime("now");
    $showFrom  = strtotime("7/27/09");
    $showTo    = strtotime("8/4/09 10:00 pm");
    if ($theTime >= $showFrom && $theTime <= $showTo) { ?>
      <dt>Rehearsals cancelled</dt>
      <dd>Rehearsals for July 28 and August 4th have been cancelled, we will resume our regular rehearsals on August 11th.</dd>
  <?php   }; ?>
  </dl>
  
  <?php 
  
    get_schedule('schedule-cb.csv',$theDate,false);
    $i = -1;
    foreach ($groupList as $gp => $name) {
     $result = fillArray($i,$gp,$dateStart,$dateStop,$r_omit,$shortForm);
     $i = $result;          
    }
    asort($dataList);

  ?>
  
    <div id="announcements">
    <h2 id="current_schedule">Current schedule of major concerts</h2>

    <ul>
      <!-- <li><a href="http://www.wchandymusicfestival.org/" title="W.C. Handy Music Festival -
      Official Website">W. C. Handy Music Festival</a>
        <ol>
          <li>July 19, First Presbyterian Church Fellowshp Hall at 3:00pm,</li>
          <li>July 21, Magnolia Church of Christ auditorium at 7:30pm</li>
        </ol> -->
      </li>
      <li>Christmas Concert: Tuesday, December 1st, 7:15 pm Shoals Theater <br />
          <em>This is a revised start time</em></li>
    </ul>

     <!-- <img class="program"
      src="/images/Shoals Band Oct 09-bigger.png" 
      title="Program for Concert Band performance" 
      alt="Program for Concert Oct. 9, 2009" 
    /> -->
    
		<?php
		if ($debug){
		echo "I'm about to iterate through datalist.<br/>";
		debug_zval_dump($dataList);
		}

	  echo "<br/>";

		foreach ($dataList as $key => $event) {

		  if($event['date'] >= $theDate) {
			echo 
			"<dt>"
			.date('F j',$event['date'])
			;
      // if($event['end'] >= $dateStart) {
      // echo " through ".date('F d, Y',$event['end']);
      // }
			echo "</dt>"
			."<dd>"
			.$eventTypes[$event['action']]
      // ." for ".$groupList[$event['group']]
			;
      if( $event['action'] != 'x' ) {
        echo " at "
        .trim($event['venue'])
        ;
      }
			echo "<br/>"
			.$event['note']."<br/>"
			
			."</dd>"
			;
			}
		}
		?>
		</dl>
		
		<?php require_once 'programs/program-091201.htmlf'; ?>
		
  </div>  <!-- End of announcements -->

            </div> <!-- end of content == end col1 -->
          </div> <!-- end col1pad -->
        </div> <!-- end col1wrap -->
        
        <?php require_once ("page-navbar.php"); ?> <!-- col2 (left) == navigation menu -->
        
        <?php require_once('page-sidebar.php'); ?> <!-- col3 == sidebar -->

      </div> <!-- end columns -->
    </div> <!-- end colmid -->
</div> <!-- colmask -->

<?php require_once 'page-footer.php'; ?>

</body>
</html>
