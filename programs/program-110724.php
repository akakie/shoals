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
    'title' => 'A<br />HOLIDAY<br />CONCERT',
    'location' => '1<sup>st</sup> Presbyterian Church' . '<br/>'.'Florence, Alabama',
    'date' => strtotime('Nov 30, 2010 7:00 pm'),
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
    <td><cite>The Old Hound Dog Rag</cite></td>
    <td>Sandridge</td>
  </tr>
  <tr>
    <td><cite>At a Dixieland Jazz Funeral</cite></td>
    <td>Spears</td>
  </tr>
  <tr>
    <td><cite>Mr. Sandman</cite>(Flute Trio)
      <br />Soloists: Elaine Kelsoe, Jody Jackson, Laura Rodgers</td>
    <td>
       <br />arr: Elaine Kelsoe</td>
  </tr>
  <tr>
    <td><cite>Mancini Magic</cite></td>
    <td>Mancini
       <br />arr: Brubaker</td>
  </tr>
  <tr>
    <td><cite>The Woodwind Polka</cite></td>
    <td>arr: Clark</td>
  </tr>
  <tr>
    <td><cite>Benny Goodman: The King of Swing</cite></td>
    <td>arr: Murtha</td>
  </tr>
  <tr>
    <td><cite>Just a Closer Walk with Thee</cite></td>
    <td>arr: Gillis/Custer</td>
  </tr>

  <tr>
    <td><cite>Lassus Trombone</cite></td>
    <td>arr: Schissel</td>
  </tr>
  <tr>
    <td><cite>Count Basie Salute</cite></td>
    <td>arr: Higgins</td>
  </tr>
  <tr>
    <td><cite>Saint Louis Blues</cite></td>
    <td>Handy
       <br />arr: Nowak</td>
  </tr>
  </table>


  </div> <!-- playlist -->
</div> <!-- program -->		
