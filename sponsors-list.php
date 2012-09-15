<div id="sponsors" class="sidebar-item">
	
  <h2 id="sponsors">Sponsors</h2>
	<p>The Band thanks the following corporate and government sponsors for their generous support.</p>
  <p>
		<?php 
			$filename = 'sponsors.csv';
      // require_once 'data-read.inc';

	  // Read the list and generate html
	  // list() must match order in data file
	    if(($fp = fopen($filename, "r")) == false) {
	         die("Can't open data file '$sponsor_list'.\n");
	    }
		    while($inString = read_file_line($fp)) {
		        list( $org,$id,$has_url,$url ) =
		        explode("\t", $inString);
						$theSponsor[$key] = $id;
					if(trim($has_url) == 'y') {
						echo "<a href=".$url.">".$org."</a><br/>";
					}
					else {echo $org."<br/>";}
	    }
	    fclose($fp);
	 ?>
  </p>
  
</div> <!-- end sponsors -->
