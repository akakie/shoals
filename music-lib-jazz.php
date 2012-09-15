<?php
  // Configure page headers
  $pageTitle    = "Music Library (Jazz)";
  $pageContent  = "Jazz music owned by the Fairbanks Community Band.";
  $pageKeywords = "music, library, jazz";
  $pageStyle    = "music-lib-jazz.css";
  $dataFile     = "music-lib-jazz.csv";
  $sortTable    =  true;
  $download     =  false;
  
  require_once 'site.inc';  // site-wide definitions

?>

  <div id="content"> <!-- page content -->
    <div id="introduction">
      <h1 id="jazzlibrary">Jazz Music Library</h1>

      <p>Building a library of music people will enjoy hearing, without having to frequently repeat tunes, is important to both players and audience. We invite everyone to contribute to developing the music library of the Fairbanks Community Band. There are several ways to support the library:</p>

      <ol>
        <li>You can simply donate to the general fund, some of which buys music.</li>

        <li>You can donate any amount to a music fund, which will be used only to build the library.</li>

        <li>You can select one of the pieces from our <a href="http://communityband.org/wish-list.php">wish list</a> and contribute the price of the music to the Band. Your name (or "anonymous" if you prefer) will appear in the program when that piece is first performed.</li>
      </ol>

      <p>The contribution of money or other assets, or of music to the library may include music for jazz band, concert band, or music ensembles. All are treated equally and will be recognized by the Band as donations for tax purposes and for expressions of appreciation.</p>
    </div><!-- introduction -->

    <div id="report body">
      <h1 id="current_jazz">Current Jazz Holdings</h1>


<div id="intro"> <!-- This does not print -->
      <p>Click on a column header to sort by that column. (uses Javascript)</p>
      <p>Click to <a href="<?echo $dataFile?>">open the data file</a>. Save the page for import to a spreadsheet.</p>
</div>

      <!-- Define columns to include in report -->
      <table title="Music Library" class="sortable" id="music_library">
        <tr>
          <th class="title">Selection</th>
          <th class="composer">Composer</th>
          <th class="lyrics">Lyricist</th>
          <th class="arranger">Arranger</th>
        </tr>
        <?php
          // Read the list and generate html
          // list() must match order in data file
          // th, td must match each other, but not necessarily file order
            if(($fp = fopen($dataFile, "r")) == false) {
                 die("Can't open data file '$dataFile'.\n");
            }
            while($inString = read_file_line($fp)) {
                list( $Title,$Lyricist,$Composer,$Arranger ) =
                explode("\t", $inString);
                $music[$key] = $Title;
              echo 
              "<tr>" .  
              "<td class='title'>"    . $Title    . "</td>" . 
              "<td class='composer'>" . $Composer . "</td>" . 
              "<td class='lyrics'>"   . $Lyricist . "</td>" . 
              "<td class='arranger'>" . $Arranger . "</td>" . 
              "</tr>";
            }
            fclose($fp);
          ?>
    </table>
    </div><!-- report body -->

<?php require_once $pageEnd; ?>
