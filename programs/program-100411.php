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
    'title' => 'Spring Concert',
    'location' => 'Woodmont Baptist East Campus' . '<br/>'
    .'Fine Arts Auditorium on Darby Dr',
    'date' => strtotime('Apr 11 2010 3:00 pm'),
    'group' => 'Shoals Community Band',
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
    <td><cite>Brighton Beach Concert March</cite>
        </td>
    <td> William Latham
     </td>
  </tr>
  <tr>
    <td><cite>Dedicatory Overture</cite>
       </td>
    <td>Clifton Williams
    </td>
  </tr>
  <tr>
    <td><cite>But Nor for Me</cite>
        <br />solo: TBA, vocalist</td>
    <td>Gershwin
     <br />arr: Barker</td>
  </tr>
  <tr>
    <td><cite>Blue Ridge Saga</cite>
       </td>
    <td>J. Swearingen
    </td>
  </tr>
  <tr>
    <td><cite>Power and Glory March</cite>
       </td>
    <td>Sousa
    </td>
  </tr>
  <tr>
    <td><cite>Toccata for Band</cite>
       </td>
    <td>F. Erickson
    </td>
  </tr>
  <tr>
    <td><cite>Embraceable You</cite>
        <br />solo: TBA, vocalist</td>
    <td>Gershwin
     <br />arr: Barker</td>
  </tr>
  <tr>
    <td><cite>Oklahoma</cite>
       </td>
    <td>Rodgers &amp; Hammerstein
     <br />arr: J. Edmondson</td>
  </tr>
  <tr>
    <td><cite>The Stars and Stripes Forever</cite>
       </td>
    <td>Sousa
    </td>
  </tr>
  </table>

  </div> <!-- playlist -->
</div> <!-- program -->		
