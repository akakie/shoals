<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
<!-- 
  Display notes for performers
-->
<?php
  require_once 'site.cfg';  // configuration for client (sort of)
  $pageVersion  = '3.0';

  // Configure page headers
  $pageTitle    ="Concert Notes";
  $pageContent  ="Notes for band members before the concert.";
  $pageKeywords ="members, notes, concert";
  $pageStyle    ="";
  $dataFile     ="";

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

  <h1>Concert Notes</h1>
    <dl>

    <dt>Call</dt>
    <dd>Band members should be on stage, ready to warm up and tune 
  		<?php echo $callTime;?> before concert time.</dd>

  	<dt>Remember the obvious</dt>
  	<dd>Music, mutes as needed, water, instrument stands if you need them.
  		Chairs are provided for all concerts.

  		<?php if($stands) { ?>
  		  Stands are also provided
  		<?php } else { ?>
  		  Stands are not provided. Bring your own, please.
  		<?php } ?>
  	</dd>

      <dt>Scent</dt>
      <dd><em>Important:</em> do not wear scent (cologne, perfume, after shave). Some people,
      including some of our band members, have allergies to these which can even be life
      threatening. Since we have little choice about where we sit on stage relative to other
      players, leaving perfumes out of our mix helps players with allergies get through the
      concerts. </dd>

    </dl>

  <!-- print the list of dress codes definitions with explanations -->
  
    <!-- <?php // require_once 'dressList.php';?>
    <dl>
      <h2 id="dress">Concert dress</h2>
      <?php      // 
            // foreach ($dressList as $key => $code) {
            //   echo '<dt>'.$code[0].'</dt>' . '<dd>'.$code[1].'</dd>';
            // }
    ?>
    </dl> -->
    
    
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