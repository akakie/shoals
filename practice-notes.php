<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
<!-- 
  Notes for rehearsals
-->
  <?php
    require_once 'site.cfg';  // configuration for client (sort of)
    $pageVersion  = '3.0';
  
    // Configure page headers
    $pageTitle    ="Rehearsal notes";
    $pageContent  ="Notes and guidelines for rehearsals.";
    $pageKeywords ="practice,rehearsal";
    $pageStyle    ="";
    $dataFile     ="";  
    $sortTable    = false;
    $download     = false;

    require_once 'page-meta-links-v2.php';
    
  ?>

<!-- add additional scripts and style sheets -->
<!-- add php functions -->
  <?php
  if($dataFile != '') { // optional function to read a line of data
    require_once 'data-read.php';
    }
    
    // local cofiguration

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
    
	<h1>Rehearsal Notes</h1>
	<h2>Guidelines for Rehearsals</h2>

  <dl>
    <dt>Equipment</dt>
    <dd>
      Please bring your mutes and other equipment to rehearsals. Trumpets are good about that;
      trombonists are not, but we need to adapt to the muted sounds during rehearsal.
    </dd>
    <dt>Music</dt>
    <dd>If you can't be at rehearsal, <strong>please</strong> see that your folder gets to
    rehearsal unless you are <strong>absolutely sure</strong> your part is covered. Either leave
    your folder the week before or give it to another band member.
    </dd>
    <dt>Attendance</dt>
    <dd>
      Sometimes we can't make it on time. Stuff happens. It does help if we all get started on
      time, though. Treat this as a word of encouragement. If you know you will be late or
      missing from a rehearsal, try to notify the <a
      href="/contacts-v2.php?director">Bandmaster</a>.
    </dd>

  </dl>
  
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