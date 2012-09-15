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
    'title' => 'A Holiday Concert',
    'location' => 'Woodmont Baptist East Campus' . '<br/>'.'Florence, Alabama',
    'date' => strtotime('Apr 11 2010 3:00 pm'),
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
    <td><cite>And the Herald Angels Sang</cite></td>
    <td> Swearingen</td>
  </tr>
  <tr>
    <td><cite>Away in a Manger</cite></td>
    <td>arr: Wallace</td>
  </tr>
  <tr>
    <td><cite>An American Christmas</cite></td>
    <td>arr: Smith</td>
  </tr>
  <tr>
    <td><cite>O Holy Night</cite></td>
    <td>Adam
       <br />arr: Custer</td>
  </tr>
  <tr>
    <td><cite>Christmas from the '50s</cite></td>
    <td>arr: Wagner</td>
  </tr>
  <tr>
    <td><cite>A Christmas Festival</cite></td>
    <td>Anderson</td>
  </tr>
  <tr>
    <td><cite>Home for Christmas</cite></td>
    <td>arr: Markham</td>
  </tr>
  <tr>
    <td><cite>The Most Wonderful Time of the Year</cite></td>
    <td>arr: Moss</td>
  </tr>
  <tr>
    <td><cite>The Runaway Sleigh</cite></td>
    <td>Smith</td>
  </tr>
  <tr>
    <td><cite>Silent Night</cite></td>
    <td>arr: Shaffer</td>
  </tr>
  </table>
  

  </div> <!-- playlist -->
</div> <!-- program -->		
