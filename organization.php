<?php
  // Configure page headers
  $pageTitle    = "Organization";
  $pageContent  = "How the band is organized.";
  $pageKeywords = "organization, board, directors, history, documents";
  $pageStyle    = "";
  $dataFile     = "";  
  $sortTable    = false;
  $download     = false;
  
  require_once 'site.inc';  // site-wide definition

	// Add local configuration

?>
<div id="content"> <!-- page content -->

    <div id="introduction">
      <!-- Empty -->
    </div><!-- introduction -->

    <div id="report body">
      <h1 id="organization">Organization</h1>
      <ul> <!-- Organization detail -->
        <li><a href="history.php" title="history of the band">History</a></li>
        <li><a href="org-docs.php" title="organizing documents">Organizing Documents</a></li>
        <li><a href="board.php" title="Board of Directors">Board of Directors</a></li>
      </ul> <!-- Organization detail-->    </div><!-- report body -->

<?php require_once $pageEnd; ?>
