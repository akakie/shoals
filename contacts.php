<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
<!-- 
  Display form to send email to band officers by Lewis Overton. v2.1
  Actual mail address are stored in a separate, undisclosed location
-->

<?php
  require_once 'site.cfg';  // configuration for client (sort of)
  $pageVersion = '3.0';

  // Configure page headers
  $pageTitle    = "Contacts";
  $pageContent  = "How to contact the Fairbanks Community Band.";
  $pageKeywords = "contact,email,address,internet";
  $pageStyle    = "";
  $dataFile     = "";

  require_once 'page-meta-links-v2.php';
?>

<!-- add additional scripts and style sheets -->
<!-- add php functions -->
<?php
  if($dataFile != '') { // optional function to read a line of data
    require_once 'data-read.php';
  }
  
  $r_format = $dateFormat;                     # define format once for consistency
  
  $debug=false;                                     # set debug mode (or not)
	$testDate = strtotime('jul 26 2007 6 pm');        # set to a test date for debug
	
	$pageNotes = 
    '<h2>Note</h2>
    <p>To contact people who perform services for the band please use the form provided. 
    The actual addresses are not in the web page at all.</p>';
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
		
  <h1>Contact the Band</h1>

  <h3>By <abbr title="United States Postal Service">USPS</abbr></h3>
  <address class="usps-contact">
    <?php echo $addressMail; ?>
  </address>

  <h3>By email<br/>
    Select the person you want to contact from the drop-down list below.</h3>

  <?php require_once ("scform.php");?>
  
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