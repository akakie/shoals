<?php
  // Configure page for specific report
  $pageTitle    = "Concert Notes";
  $pageContent  = "Notes for band members before the concert.";
  $pageKeywords = "members, notes, concert";
  $pageStyle    = "";
  $dataFile     = "";  
  $sortTable    = false;
  $download     = false;
  
  require_once 'site.inc';  // site-wide definitions

	// Add local configuration
    
  require_once('venue-list.inc');
  require_once 'page-sidebar.inc';
?>

<div id="content">

<h1>Concert Notes</h1>
<dl>
	<dt>Call</dt>
	<dd>Band members should be on stage, ready to warm up and tune 
		<?php echo $callTime;?> before concert time.</dd>
	<dt>Remember the obvious</dt>
	<dd>Music, mutes as needed, water, instrument stands if you need them.
		Chairs are provided for all concerts.
		<?php
		if($stands) {
		  echo ' Stands are also provided';
		}
		else {
		  echo ' Stands are not provided. Bring your own, please.';
		}
		?>
	</dd>
  <dt>Scent</dt>
  <dd><em>Important:</em> do not wear scent (cologne, perfume, after shave). Some people, including some of our band members, have allergies to these which can even be life threatening. Since we have little choice about where we sit on stage relative to other players, leaving perfumes out of our mix helps players with allergies get through the concerts.
  </dd>
  <dt>Concert dress</dt>
  <dd>
    For all occasions: light blue polo shirt with the SCB logo and khaki pants or khaki shorts, depending on the season.
  </dd>

</dl>

<?php require_once ("page-footer.inc"); ?>

</div> <!-- end of content -->

</body>
</html>
