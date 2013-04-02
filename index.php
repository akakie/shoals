
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>

<?php
  require_once 'site.cfg';  // configuration for client (sort of)
  $pageVersion = '3.0';

  // Configure page headers
  $pageTitle    =
  "A wind and percussion ensemble in $city, Alabama, conducted by $director";
  $pageContent  =
  "Descriptions of organization and operation of $org";
  $pageKeywords =
  "$org, wind ensemble, community band, concert band, Shoals, $city, Alabama";
  $pageStyle    ="program.css";
  $dataFile     ="";

  require_once 'page-meta-links-v2.php';
  
?>

<!-- add additional scripts and style sheets -->
<!-- add php functions/arguments -->

<?php

  require_once 'getDisplayStatus.php';
  require_once 'fill_array.php';
  require_once 'schedule-events.php';

	// Add local configuration
  
  $debug=false;                               // set debug mode (or not)
	$testDate = strtotime('jun 1 2010 6 am');   // set to a test date for debug

  if($debug) {
		$theDate = $testDate;                     // use the debug date
    echo "Debug: "."test date is ".date($dateFormat,$theDate).".<br/>";
    }
  else {
    $theDate = time();
  }
  
  $dateStart = $season['start'];
	$dateStop  = $season['end'];
	$r_omit    = true;                          // omit rehearsal detail
	$shortForm = true;                          // only show dates after today

  /*
  * Configure getDisplayStatus function call
  */
    $setDisplayParams = array(
      'flags' => array('+','-'),
      'maxSlip'=> '+4 days',
      'debug' => array(
        'forceDate' => '',
        'call'      => false,
        'start'     => false,
        'until'     => false,
        'event'     => false
         )
       );
    if($debug)
    {
      var_dump($setDisplayParams);
      print 'max slip: '.$setDisplayParams['maxSlip'] . '<br/>';
    }
	
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

    <p>The <?php echo $org; ?> is a wind and percussion ensemble for adult
    musicians. We are active year around and perform in a variety of places in
    our area. Our purpose is to provide an opportunity for adults to continue
    making music beyond the high school and college years, and to pass our
    enjoyment of live music on to the community in which we perform. See the
    introduction page for more information about our members, our music, and
    how to join.</p>

  </div>  <!-- end of introduction -->
  

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
      
<div class=event>
  
<style>

ul.event {
  text-align:center;
  list-style-type:none;
  font-size: 1.5em;
  line-height: 1.2em;
}
</style>

<?php  
  $event = array(
    'event_date'  => '4/7/2013 3:00pm',
    'show_from'   => '3/31/2013',
    'show_until'  => '+1 hour,event'
     );
   if( getDisplayStatus($event,$setDisplayParams) ) : ?>
    <h3>Concert: Sunday, October 7, 3:00 pm</h3>
  <p>

<ul class="event">
  <li>Shoals Community Band</li>
  <li>presents</li>
  <li>SPRING CONCERT</li>
  <li>A</li>
  <li>Mixed Medley of Music</li>
  <li>from</li>
  <li>AROUND THE WORLD</li>
</ul>
    
    At the <a href="http://firstpresflorence.org/" title="First Presbyterian Church Florence, AL">First Presbyterian Church of Florence</a> in the fellowship hall. The address is <br>
    <blockquote>
      <addr>
        224 E. Mobile St.<br>
        Florence, AL 35630
      </addr>
    </blockquote>
    Please join us for live concert band music.
  </p>
<?php endif ;  ?>
 
</div> <!-- end event -->
	  
		
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
