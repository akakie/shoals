<!-- 
	Schedule driver for the jazz band.
	Include in home page.
-->
    <dt>Jazz Band:</dt>
    <?php get_schedule('schedule-jb.csv',$theDate,false);?>
		<dd>
    <!-- Break notice -->
    <?php 
      require_once ('schedule-break.php');
      $break_start = 'jul 26 2007 8 am';
      $break_end = 'aug 27 2007  8 am';
      print_break_notice('jazz',$break_start,$break_end,'summer');
    ?>
		</dd>
    <dd>Next rehearsal: 
    <?php
      if($have_rehearsal) {
        print_event($rehearsal,$venue_list);
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
    ?>
		</dd>