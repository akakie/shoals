<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>

<?php
  require_once 'site.cfg';  // configuration for client (sort of)

  // Configure page headers
  $pageTitle    = "About the band";
  $pageContent  = "who we are and what we do";
  $pageKeywords = "contact,purpose,mission,join";
  $pageStyle    = "";
  $dataFile     = "";
  $pageVersion  = '3.0';

  require_once 'page-meta-links-v2.php';
?>

<!-- add additional scripts and style sheets -->
<!-- add php functions -->
<?php
  if($dataFile != '') { // optional function to read a line of data
    require_once 'data-read.php';
  }
  require_once 'venue-list.inc';
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

  
 <h1>About the Band</h1>
 
 <dl> 
   <dt>Who we are</dt>

   <dd> The <a title="Wikipedia Entry: Concert_band"
   href="http://en.wikipedia.org/wiki/Concert_band"><?php echo $org; ?></a> is
   a wind and percussion ensemble for adult musicians who want to continue
   performing as a lifelong avocation. We are organized as a <a
   href="http://en.wikipedia.org/wiki/501c3">501(c)3</a> non-profit
   corporation. Donations to the band are tax deductible for the donors. We are
   supported by donations from individual and corporate sponsors, and revenues
   from concerts performed. Participants are all volunteers and come from a
   wide variety of roles within Florence, Sheffield, Tuscumbia, Muscle Shoals
   and other areas close to the Quad cities. Most of us received our early
   training in public school music programs. Some of us continued to study
   music through college or in the military. A number of our members are active
   or retired music teachers in public schools, looking for a chance to play
   their instruments.

   </dd>

<dt>What we do</dt>

    <dd>The concert band consists of approximately 45 people and meets year
    long performing four major concerts each year: for the <a
    href="http://www.wchandymusicfestival.org/" title="W.C. Handy Music
    Festival - Official Website">W. C. Handy Music Festival</a> in July, a fall
    concert in October, a Christmas concert in December, and a spring concert
    in March or April. We also play as requested for nursing and retirement
    homes in the area, conventions, conferences, churches, and an occasional
    concert in the mall. Summer outdoor concerts are not out of the question as
    well. The band may feature individual band members, singers or other
    musicians from the community as soloists with the band. </dd>

   
<dt>What we play</dt>

    <dd>The concert band plays a varied repertoire which includes music from
    the "big band era;"original works for band; transcriptions of classical and
    contemporary music originally written for the symphonic orchestra, excerpts
    of Broadway and Hollywood (TV) shows arranged for band; traditional
    marches; medleys of music from popular composers and arrangements of ethnic
    or national music for band. Many concerts will have a theme: a holiday or
    season, a patriotic theme, or a commemoration of some event. Other concerts
    are more general, drawing from the wide range of music in our music library
    or having been borrowed from other music libraries in the area. The summer
    band plays a lighter mix of music more suited to the venues we would be
    performing at. </dd>


<!--  <dt>Keeping up with the band</dt>

 <dd>To receive announcements by email about band events, or for information
about this week's rehearsals and tips on what to practice, subscribe to one or
more of our <a href="http://shoalsconcertband.org/bandmail/">email
newsletters</a>. </dd>

 -->
 
 <dt>Rehearsals</dt>

   <dd> Rehearsals are held every Tuesday night from 7-8:30 pm at <?php echo
   $addressRehearsal;?>. The next concert will be announced on our web site.


     <!-- 
       A list of performances along with exceptions to scheduled rehearsals
       appears on our <a title="Schedule of rehearsals and concerts"
       href="schedule.php">schedule </a> page on our web site.

     -->

   </dd>
   
  <dt>How to join</dt>
  
    <dd> The <?php echo $org; ?> is composed of people from all walks of life,
    ages 18 to 80+. Each member must be able to read high school band music and
    have your own instrument. Percussion instruments are supplied by the band.
    Please contact <?php echo $addressDirector; ?> by phone or <a
    href="contacts.php?director" title="How to contact the band">by email</a>
    if you are interested in joining our band. </dd>


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