<?php
  // Configure page for specific report
  $pageTitle="Music Wish List";
  $pageContent="Music wanted by the Fairbanks Community Band.";
  $pageKeywords="music, wish list";
  $pageStyle="music-wish-cb.css";
  $dataFile = "music-wish-cb.csv";
  $sortTable="true";
  
  require_once 'site.inc';  // site-wide definitions

?>

  <div id="content"> <!-- page content -->
    <div id="introduction">
      <h1 id="musicwish">Concert Band Music Wish List</h1>

      <p>This is a list of music we wish we owned. To nominate a piece for this list, 
        <a href="contacts.php">write to our director</a>. Include in your message the 
        name of the piece, composer and arranger if you know them, and a comment about
        why you would like the band to perform it. You can look up music at
        <a href="http://www.jwpepper.com/">J. W. Pepper &amp; Son</a>.</p>
    </div><!-- introduction -->

    <div id="report body">

      <div id="intro"> <!-- This does not print -->
            <p>Click on a column header to sort by that column. (uses Javascript)</p>
            <p>Click to <a href="<?echo $dataFile?>">open the data file</a>. Save the page for import to a spreadsheet.</p>
      </div>
      
      <!-- Define columns to include in report -->

      <table title="Wish List" class="sortable" id="p_wish-list">
        <tr>
          <th class="index">Index</th>
          <th class="title">Title</th>
          <th class="composer">Composer</th>
          <th class="price">Price</th>
          <th class="own">Own</th>
          <th class="tier">Tier</th>
        </tr>
        
        <?php
          // Read the list and generate html
          // list() must match order in data file
          // th, td must match each other, but not necessarily file order
            if(($fp = fopen($dataFile, "r")) == false) {
                 die("Can't open data file '$dataFile'.\n");
            }
            while($inString = read_file_line($fp)) {
                list( $RefID,$Title,$Composer,$Price,$Own,$Tier ) =
                explode("\t", $inString);
                $music[$key] = $Title;
              echo 
              "<tr>" .  
              "<td class='index'>"    . $RefID    . "</td>" . 
              "<td class='title'>"    . $Title    . "</td>" . 
              "<td class='composer'>" . $Composer . "</td>" . 
              "<td class='price'>"    . $Price    . "</td>" . 
              "<td class='own'>"      . $Own      . "</td>" . 
              "<td class='tier'>"     . $Tier     . "</td>" . 
              "</tr>";
            }
            fclose($fp);
          ?>
      </table>
    </div><!-- report body -->

<?php require_once $pageEnd; ?>
