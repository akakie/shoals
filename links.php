<?php
  // Configure page for specific report
  $pageTitle    ="External links";
  $pageContent  ="Links to aids, guides, reference, other local music groups and sites of interest.";
  $pageKeywords ="aids, guides, reference, music, links, bands.";
  $pageStyle    ="";
  $dataFile     ="";  
  $sortTable    = false;
  $download     = false;
  
  require_once 'site.inc';  // site-wide definitions

	// Add local configuration
  
  require_once 'page-sidebar.inc';
	
?>

<div id="content">

<h1>External links</h1>
<p>This page provides links to resources which you may find useful or interesting. 
Most (not all) will take you away from the home site. Use them as you see fit. 
If you discover additional links which you think of value to other members, 
please forward information about them to the webmaster.
</p>

<!--
Links may be provided as included files which are in the form of definition lists.
-->

<dl>
	<dt>Fairbanks Alaska Visitor Information Site</dt>
		<dd title="visitor information"> Fairbanks, Alaska summer and winter events. Information
      for visitors on activities to do, things to see in <a
      href="http://fairbanks-alaska.com/">Fairbanks Alaska</a>. </dd>
	

	<dt>Other community music in Fairbanks</dt>
		<dd><a href="http://www.fairbankssymphony.org/">
		Fairbanks Symphony Association</a></dd>
		<dd><a href="http://www.flot.org/">
		Fairbanks Light Opera Theater</a></dd>
		<dd><a href="http://www.fsaf.org/index2.htm">Fairbanks Summer Arts Festival</a></dd>
		<dd><acronym title="University of Alaska Faribanks">UAF</acronym>
		<a href="http://www.uaf.edu/music/department/">Music Department</a></dd>
		
	<dt>Community music groups on the web</dt>
		<dd>Ron Boerger, self described <q>hornist-at-large</q> is a member of the 
		    <a href="http://www.asband.org/" 
		    title="Austin Symphonic Band">Austin Symphonic Band</a>. He maintains a large list of <a
        href="http://boerger.org/c-m/">community music</a> groups from around the nation and
        around the world. Browsing through the list will give one an idea of the current
        popularity of community bands and orchestras. He also runs a discussion list if you
        want to visit with other musicians. </dd>

	<dt>Sharing Bookmarks</dt>
		<dd>The del.icio.us web site is a free resource for sharing bookmarks. By clicking on
      tags (like "brass" or "trombone", for example) you can see lists of web sites that other
      people have found useful. To add your own bookmarks to this site, you must register with
      the site. Registration is free and simply provides a nickname under which to store your
      bookmarks. To learn more, read the <a href="http://del.icio.us/doc/about">del.icio.us
      documentation</a>. An example of <a href="http://del.icio.us/akakie/brass">bookmarks
      about brass</a> may give you ideas about how shared bookmarks can provide information
      for musicians.</dd>

  <dt>Source for band music</dt>
    <dd><a href="http://www.jwpepper.com/">J. W. Pepper &amp; Son</a>
    supplies much of the new music ordered by the band. For information about other publishers, visit this short 
    <a href="http://del.icio.us/Akakie/publisher">list of publishers</a> at del.icio.us.
    </dd>
</dl>

<?php require_once (".footer.inc"); ?>

</div>  <!-- End of content -->

</body>
</html>