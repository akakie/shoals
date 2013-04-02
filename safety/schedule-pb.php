<!-- 
	Schedule driver for the park band.
	Include in home page.
-->
    <dt>Park Band:</dt>
    <?php get_schedule('schedule-pb.csv',$theDate,false);?>

    <dd>Next rehearsal: <?php
      if($have_rehearsal) {
        print_event($rehearsal,$venue_list);
        if($n_remaining > 0) {
          echo " This  is rehearsal ".$have_rehearsal." of ".$n_rehearsals.". ".
          "Including ".date('F d',$rehearsal[0]).", ".
          $n_remaining." ";
          if($n_remaining == 1) {echo " rehearsal remains ";}
          else{echo " rehearsals remain ";}
          echo "until the concert on ".
          date('F d',$concert[0]).".";
          }
        }
      else {
        echo "No rehearsals scheduled.";
      }
      ?></dd>

    <dd>Next concert: 
    <?php
      if($have_concert) {
        print_event($concert,$venue_list);
      }
      else {
        echo "No concerts scheduled.";
      }
    ?></dd>