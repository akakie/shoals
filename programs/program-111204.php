<?php
/*
* CAUTION The most common error is in generating the new playlist file. It is usually done by
* copying the content of a recent playlist file. The MISTAKE happens when one changes the data
* without matching the file name. 
*
* change the div name to match the concert date
* Change the header to the concert name
* change the date and time
* change director, emcee, et al. as needed
* delete old program contents
* add new entries
* add file to program archive
*/
  $pgm = $pgm = array(
    'title' => 'A<br />CHRISTMAS<br />CONCERT',
    'location' => 'First Presbyterian Church' . '<br/>'.'Florence, Alabama',
    'date' => strtotime('Dec 4, 2011 3:00 pm'),
    'group' => 'Shoals Concert Band',
    'director' => 'James E. Champion',
    'emcee' => '',
    'guests' => ''
    );
?>
<div id="program-"<?php date('ymd',$pgm['date']) ?>">

<?php include 'pgmIntro.php'; ?>

<div id="playlist" title="playlist in performance order">
      
  <table title=" <?php echo 'Program for '.date('F d, Y',$pgm['date']) ?>" />

  <tr><th>Selection</th><th>Composer<br/>Arranger</th></tr>


  <tr>
    <td><cite>On This Day Earth Shall Ring</cite></td>
    <td>Holst
       <br />arr: Smith</td>
  </tr>
  <tr>
    <td><cite>Midnight in Bethlehem</cite></td>
    <td>arr: Barker</td>
  </tr>
  <tr>
    <td><cite>Fantasia on "God Rest You Merry Gentlemen"</cite></td>
    <td>Washburn</td>
  </tr>
  <tr>
    <td><cite>The Bells of Christmas</cite></td>
    <td>Longfield</td>
  </tr>
  <tr>
    <td><cite>Christmas on a Snowy Night</cite></td>
    <td>arr: Moss</td>
  </tr>
  <tr>
    <td><cite>Baby It's Cold Outside</cite> 
      <br />solo: Piccolo - Elaine Kelsoe, Tuba - Monty Shelton</td>
    <td>arr: Moss</td>
  </tr>
  <tr>
    <td><cite>Blue Christmas</cite></td>
    <td>arr: Dawson</td>
  </tr>
  <tr>
    <td><cite>Christmas "Pop" Sing Along</cite></td>
    <td>arr: Ployhar</td>
  </tr>
  <tr>
    <td><cite>Bobsled Run</cite></td>
    <td>Conley
      </td>
  </tr>
  <tr>
    <td><cite>Christmas Sing-a-Long</cite></td>
    <td>arr: Ployhar</td>
  </tr>
  </table>


  </div> <!-- playlist -->
</div> <!-- program -->		
