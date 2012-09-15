<?php
  // Configure page for specific report
  $pageTitle="Current Music Folder";
  $pageContent="Music in the active folder of the Fairbanks Community Band.";
  $pageKeywords="practice,rehearsal,music,folder,repertoire";
  $pageStyle="music-folder-cb.css";
  $dataFile ="music-lib-cb.csv";  
  $sortTable=true;
  
  require_once 'site.inc';  // site-wide definitions

?>

  <div id="content"> <!-- page content -->
    
  <div id="introduction">
    <h1>Music Currently in Rehearsal</h1>
    <h2>Concert Band</h2>
  
	<p>
		Band members: if you have other music in the folder, please return it to the librarian. If you are missing music from this list, go check it out.
	</p>
</div> <!-- end introduction -->

<div id="report body">
  
  <!-- Define columns to include in report -->

  <table title="In rehearsal: what's in the folder" class="sortable" id="music-library">
    <tr>
      <th class="box">Box</th>
      <th class="title">Title</th>
      <th class="composer">Composer</th>
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
            list( $Box,$Title,$Composer,$Arranger,,$Location ) =
            explode("\t", $inString);
            $music[$key] = $Title;
						if (mb_convert_case($Location, MB_CASE_LOWER) == 'fcb') {
	          echo 
	          "<tr>" .  
	          "<td class='box'>"      . $Box      . "</td>" . 
	          "<td class='title'>"    . $Title    . "</td>" . 
	          "<td class='composer'>" . $Composer . "</td>" . 
	          "<td class='arranger'>" . $Arranger . "</td>" . 
	          "</tr>";
						}
        }
        fclose($fp);
      ?>
  </table>

</div> <!-- report body -->

<?php require_once $pageEnd; ?>
