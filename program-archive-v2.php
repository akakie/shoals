<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
  <?php
    require_once 'site.cfg';  // configuration for client (sort of)
    $pageVersion  = '3.0';
  
    // Configure page headers
    $pageTitle    ="Program Archive";
    $pageContent  ="Program for next concert and archive of
      programs for past concerts.";
    $pageKeywords ="concert,performance,program,notes,archive";
    $pageStyle    ="program.css";
    $dataFile     = "";

    require_once 'page-meta-links-v2.php';
    
  ?>

<!-- add additional scripts and style sheets -->
<!-- styles for program listings only -->
<style type="text/css">
  .pgmIntro
    {text-align:center}
  table {
    margin-left:auto; 
    margin-right:auto;
  }
</style>
<!-- add php functions -->
  <?php
  if($dataFile != '') { // optional function to read a line of data
    require_once 'data-read.php';
    }
  // local configuration
  $NAV_PREFIX='programs/program-';
  $NAV_SUFFIX='.php';

  // Concerts:
  // create file with program listing, where file name conforms to pattern
  // add concert date here

  $concert = array(
    strtotime('Dec 4 2011'),
    strtotime('July 24 2011'),
    strtotime('Nov 30 2010'),
    strtotime('Apr 11 2010'),
    strtotime('Dec 1 2009'),
    strtotime('Oct 18 2009'),
    strtotime('Mar 29 2009'),
    strtotime('July 19 2009'),
    strtotime('Oct 5 2008'),
    strtotime('July 20 2008'),
    strtotime('July 19 2007'),
    );

  ?>
  

<!-- set up jquery and plugins -->

</head>

<body id="page-body">
  <?php require_once ("page-banner.php"); ?> <!-- banner == header -->

  <div id="colmask">
  <div id="colmid">
  <div id="columns">

  <div id="col1wrap">
  <div id="col1pad">
  				  
  <div id="content"> <!-- col1  == content -->

	<div id="introduction">
		<h1>Concert Programs</h1> 

  	<p>Programs for our past concerts are typical of the music we play, and an indication of
    what you are likely to hear from us. We try not to repeat selections too much, and like to
    vary our programs, but the general style remains fairly consistent. Choose a date from the
    menu to see what we played on a particular concert.</p>

  	 <p>If you print this page, you will see only the currently visible program, without the
     navigation and footer information. You can view other programs by selecting a concert date
     from the list and clicking on "show program". </p>
  	
  	 <p>Band members should review the <a title="How to dress, what to bring"
     href="/concert-notes-v2.php">Concert notes</a> for concert dress, what to bring, and
     reporting time. </p>

     <div id="selection">
     	<div id="navcontainer">
     		<form method="post" action="" >
     		<p>
     	   <select name="list1">
     			<option selected="selected" value="help">Choose date</option>
     			<?php foreach ($concert as $event) {
     			  echo '<option value="'.date('ymd',$event).'">'.date('M j Y',$event).'</option>';
     			}
     			?>
     		</select>
     			<input type="hidden" name="_submit_check" value="1" /> 
     			<input type="submit" value="show program" />
     		</p>
     		</form>
     	</div> <!-- navcontainer -->
     </div> <!-- end selection -->
     
	</div> <!-- introduction --> 
	
	<div id="program-archive ">
	<?php
    if (array_key_exists('_submit_check', $_POST)) 
      { $page=htmlentities($_POST['list1']) ; }
    if (! is_null($page)) {require_once("$NAV_PREFIX" . "$page" . "$NAV_SUFFIX");} 
	?>
  </div> <!-- program-archive -->

  </div> <!-- end content -->
  </div> <!-- end col1pad -->
  </div> <!-- end col1wrap -->
  <?php require_once ("page-navbar.php"); ?> <!-- col2 (left) == menu: -->
  <?php require_once('page-sidebar.php'); ?><!-- col3 == sidebar -->
  </div> <!-- end columns -->
  </div> <!-- end colmid -->
  </div> <!-- colmask -->
  <?php require_once 'page-footer.php'; ?>

</body>
</html>