<!-- 
	Schedule driver for the concert band.
	Include in home page.
-->
    <dt>Concert Band:</dt>
    <?php get_schedule('schedule-cb.csv',$theDate,false);?>
    <!-- Break notice -->
    <?php 
    if('summer' == $season['name']) {
      require_once ('schedule-break.php');
      $break_start = 'may 20 2007 10 pm';
      $break_end = 'aug 29 2007  8 am';
      print_break_notice('concert',$break_start,$break_end,'summer');
      }
    ?>

    <dd>Next rehearsal: 
    <?php
      if($have_rehearsal) {
        print_event($rehearsal,$venue_list);
        if($n_remaining > 0) {
          echo " Next rehearsal is ".$have_rehearsal." of ".$n_rehearsals.". ".
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