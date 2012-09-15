<?php
  $pgm = $pgm = array(
    'title' => 'Christmas Concert',
    'location' => 'Shoals Theater',
    'date' => strtotime('Dec 1 2009 7:15 pm'),
    'group' => 'Shoals Community Band',
    'director' => '',
    'emcee' => '',
    'guests' => ''
    );
?>
<div id="program-"<?php date('ymd',$pgm['date']) ?>">
<!-- 
change the div name to match the concert date
Change the header to the concert name
change the date and time
change director, emcee, et al. as needed
delete old program contents
add new entries
add file to program archive
 -->

  <h1><cite><?php echo $pgm['title'] ?></cite></h1>
  <h2><?php echo $pgm['location'] ?><br />    
      <?php echo date('F d, Y',$pgm['date']).' at '.date('g:i a T',$pgm['date']) ?>
  </h2>

  <div id="playlist" title="playlist in performance order">
    <table title=" <?php echo 'Program for '.date('F d, Y',$pgm['date']) ?>" /><div id="program-archive">

        <!-- <tr>
          <td colspan="2" class="note">
          Concert Band Program<br />
          Wendy Ward, Director<br />
          Pam Hallberg, Guest Emcee
          </td>
        </tr> -->
         
  <tr><th>Selection</th><th>Composer<br/>Arranger</th></tr>

  <tr>
    <td colspan="2" class="note">
    Shoals Community Band
    </td>
  </tr>


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

