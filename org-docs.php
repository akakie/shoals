<?php
  // Configure page for specific report
  $pageTitle    ="Bylaws";
  $pageContent  ="Incorporation and bylaws.";
  $pageKeywords ="bylaws";
  $pageStyle    ="";
  $dataFile     ="";  
  $sortTable    = false;
  $download     = false;
    
  require_once 'site.inc';  // site-wide definitions
  
	require_once 'page-sidebar.inc';
  
  $debug=false;                                     # set debug mode (or not)
	$testDate = strtotime('jul 26 2007 6 pm');       # set to a test date for debug

  require_once('schedule-events.php');             # get the scheduling data
  require_once("print-event.inc");
  require_once('venue-list.inc');
  
?>
  
  <!-- formatting for this page -->
  <style type="text/css" media="all">
  .lead { /*lead-in for paragraph*/
    font-weight: bold;
  }
  .sig-block { /* block for signatures of documents */
    margin-left: 50%;
  }
  </style>

  <div id="content">
    <div id="incorporation">
      <?php require_once 'incorporation.inc';?>
    </div>
    <div id="bylaws">
      <?php require_once ("bylaws.inc"); ?>
    </div>  <!-- bylaws -->
   <?php require_once ("page-footer.inc"); ?>
  
   </div> <!-- end content -->
  </body>
  </html>