<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
<!-- 
  Display concert band music library by Lewis Overton. v2.1

  This page reads a music library file and presents it in a table which may
  be sorted by multiple columns in ascending or descending order and which may
  also be filtered to hide (or show) specified lines.

  Sorting and filtering require javascript.
-->
<?php
  require_once 'site.cfg';  // configuration for client (sort of)

  // Configure page headers
  $pageTitle    = "Music Library (Concert)";
  $pageContent  = "Concert band music owned by the Shoals Community Band.";
  $pageKeywords = "music, library";
  $pageStyle    = "music-lib-cb.css";
  $dataFile     = "x";

  require_once 'page-meta-links-v2.php';
?>

<!-- add additional scripts and style sheets -->
<!-- add php functions -->
<?php
  if($dataFile != '') { // optional function to read a line of data
    require_once 'data-read.php';
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

    <!-- main page content -->
    <h1 id="cb-library">
      <?php 
      echo  $company."<br/>".
      "Concert Band Music Library"
      ; ?>
    </h1>
    <div id="introduction">

      <p>Building a library of music people will enjoy hearing, without having
      to frequently repeat tunes, is important to both players and audience.
      We invite everyone to contribute to developing the music library of the
      Band. There are several ways to support the library:</p>

      <ol>
        <li>You can simply donate to the general fund, some of which buys
        music.</li>

        <li>You can donate any amount to a music fund, which will be used only
        to build the library.</li>
        
        <li>You can donate assets, the revenue from which will support Band
        operations, including purchase of music.

      </ol>

      <p>The contribution of money or other assets will be recognized by the
      Band as donations for tax purposes and for expressions of
      appreciation.</p>
    </div><!-- introduction -->

    <div id="report body">
      <h1 id="current_holdings">Current Holdings</h1>

      <div id="intro"> <!-- This does not print -->
            <p>Click on a column header to sort by that column. (uses
            Javascript)</p>
      </div>
            
      <!-- Define columns to include in report -->

      <table 
        title="Concert Band Music Library" 
				id="library" 
				class="tablesorter"
			>
				<thead>
        <tr>
          <th>Box&nbsp;&nbsp;</th>
          <th>Selection</th>
          <th>Composer</th>
          <th>Arranger</th>
          <th>Play</th>
        </tr>
				</thead>
				<tfoot>
					<tr>
            <th>Box&nbsp;&nbsp;</th>
            <th>Selection</th>
            <th>Composer</th>
            <th>Arranger</th>
            <th>Play</th>
	        </tr>
				</tfoot>
				<tbody>
        <?php
          // Read the list and generate html
          // list() must match order in data file
          // th, td must match each other, but not necessarily file order
          
          foreach ($libList as $lib) {
            $fGroup = ucfirst($lib)."-";
            $dataFile = 'music-lib-'.$lib.'.csv';

          if(($fp = fopen($dataFile, "r")) == false) {
               die("Can't open data file '$dataFile'.\n");
          }
          while($inString = read_file_line($fp)) {
              list( $Box,$Title,$Composer,$Arranger,$Play ) =
              explode("\t", $inString);
              $Box = $fGroup.$Box;
            echo 
            "<tr>" .  
            "<td class='box'>"      . $Box      . "</td>" . 
            "<td class='title'>"    . $Title    . "</td>" . 
            "<td class='composer'>" . $Composer . "</td>" . 
            "<td class='arranger'>" . $Arranger . "</td>" . 
            "<td class='play'>"     . $Play     . "</td>" . 
            "</tr>";
          }
          fclose($fp);
					}
        ?>
				</tbody>
      </table>
  </div><!-- report body -->
  
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
