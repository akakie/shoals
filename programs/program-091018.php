<?php
$pgm = $pgm = array(
  'title' => 'Autumn Festival',
  'location' => 'Shoals Theater',
  'date' => strtotime('Oct 18 2009 8:00 pm'),
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


<div id="playlist" title="playlist in performance order">
  <table title=" <?php echo 'Program for '.date('F d, Y',$pgm['date']) ?>" />
    
<div id="program-archive">

<h1><cite><?php echo $pgm['title'] ?></cite></h1>
<h2><?php echo $pgm['location'] ?><br />    
    <?php echo date('F d, Y',$pgm['date']).' at '.date('g:i a T',$pgm['date']) ?>
</h2>


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
    <td><cite>St Petersburg March</cite>
       </td>
    <td>Johnnie Vinson
    </td>
  </tr>
  <tr>
    <td><cite>Spirit of the Falcon</cite>
       </td>
    <td>Richard Saucedo
     </td>
  </tr>
  <tr>
    <td><cite>Gallito</cite>
       </td>
    <td>S. Lope
     <br />arr: Weger</td>
  </tr>
  <tr>
    <td><cite>Slavonic Dances #8</cite>
       </td>
    <td>A. Dvorak
     <br />arr: R. Longfield</td>
  </tr>
  <tr>
    <td><cite>American Riversongs</cite>
       </td>
    <td>Pierre LaPlante
    </td>
  </tr>
  <tr>
    <td><cite>Manatee Lyric Ovt</cite>
       </td>
    <td>Robert Sheldon
    </td>
  </tr>
  <tr>
    <td><cite>Flutopia (Fantasia for Flutes)</cite>
        <br />solo: J. Jackson, E. Kelso, L. Rogers</td>
    <td>D. Shaffer
    </td>
  </tr>
  <tr>
    <td><cite>National Emblem March</cite>
       </td>
    <td> E.E. Bagley
     <br />arr: Schissel</td>
  </tr>
  <tr>
    <td><cite>Emblem of Unity March</cite>
       </td>
    <td>J.J. Richards
     <br />arr: Swearingen</td>
  </tr>
  </table>

  </div> <!-- playlist -->
</div> <!-- program -->

