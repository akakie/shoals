<?php
  // Configure page for specific report
  $pageTitle    ="Other events";
  $pageContent  ="Music events reported by members.";
  $pageKeywords ="other events";
  $pageStyle    ="";
  $dataFile     ="";  
  $sortTable    = false;
  $download     = false;
  
  require_once 'site.inc';  // site-wide definitions

  require_once ("page-sidebar.inc");
?>

<div id="content"> <!-- page content -->
  
  <h1 id="other_music">Other Music</h1>
  
  <p>Our members are involved with other musical activities around the area. We present notices of events the members recommend as a courtesy to both members and the public.</p>
  
  <h2 id="local">Local Events</h2>
  
  <?php $count=0; ?>
  <dl>

<!-- Events automatically disappear an hour after the scheduled start -->
<!-- To enter events with TextMate use snippet FCB-tab "External event" -->

  <?php
      $start=strtotime('jul 15 2007  2 pm');
      $end  =strtotime('jul 29 2007  8 pm');
      if (time() <=  $end + 3600) {
        $count++;
        echo "<dt>".date('l, F d, g:i a',$start)." through ".date('l, F d, g:i a',$end).", ".
        "UAF</dt>
        <dd><a href='http://www.fsaf.org'>Fairbanks Summer Arts Festival</a>
        Two weeks of arts and crafts including music, drama, dance, painting, and sculpture.
        </dd>";
      };

			$start=strtotime('jul 27 2007  7 pm');
      $end  =strtotime('jul 27 2007  7:45 pm');
      if (time() <=  $end + 3600) {
        $count++;
        echo "<dt>".date('l, F d, g:i a',$start)." through ".date('l, F d, g:i a',$end).", ".
        "UAF</dt>
        <dd><a href='http://www.fsaf.org'>Festival Wind Ensemble</a>
        For the first time the Festival Winds have their own concert in Davis Hall at UAF. 
				This is a high quality band which will perform for about 45 minutes this year. Admission is $5
				or free with a festival ID. Highly recommended.
        </dd>";
      };

			$start=strtotime('jul 27 2007  12 pm');
      $end  =strtotime('jul 27 2007  1 pm');
      if (time() <=  $end + 3600) {
        $count++;
        echo "<dt>".date('l, F d, g:i a',$start)." through ".date('l, F d, g:i a',$end).", ".
        "UAF</dt>
        <dd><a href='http://www.fsaf.org'>Festival Brass Ensemble</a>
        The brass choir will perform in Golden Heart Plaza between 1st Avenue and the Chena River in downtown Fairbanks.
				This group is well worth hearing. Highly recommended. Free. 
        </dd>";
      };
  
  if ($count < 1) {echo "<dt>Nothing scheduled</dt>"; };
  ?>
  </dl>
  
<h2 id="other_events">Other Events</h2>
  <p>Here are some summer concert dates for the greater Anchorage area.</p>
  <?php $count=0; ?>
  <dl>

  <?php
    $event=mktime (19,0,0,5,31,2007); // 19:0 5/31/2007
    if (time() <=  $event + 3600) {
      $count++;
      echo "<dt>" . date('l, F d, g:i a',$event) . ", " .
      "Eagle River Band Shell</dt>
      <dd>Chugiak Eagle River Community Band: setup at 6:30</dd>";
    };
    $event=mktime (19,0,0,6,14,2007); // 19:0 5/31/2007
    if (time() <=  $event + 3600) {
      $count++;
      echo "<dt>" . date('l, F d, g:i a',$event) . ", " .
      "Eagle River Band Shell</dt>
      <dd>Chugiak Eagle River Community Band: setup at 6:30</dd>";
    };
      $event=mktime (14,0,0,6,23,2007); // 4:0 6/23/2007
      if (time() <=  $event + 3600) {
        $count++;
        echo "<dt>" . date('l, F d, g:i a',$event) . ", " .
        "Petrovitch Park, 4<sup>th</sup> and E in Anchorage</dt>
        <dd>Chugiak Eagle River Community Band: setup at 2:30, play 3-4</dd>";
    };
      $event=mktime (18,0,0,7,3,2007); // 7:0 7/3/2007
      if (time() <=  $event + 3600) {
        $count++;
        echo "<dt>" . date('l, F d, g:i a',$event) . ", " .
        "Eagle River Lions Park</dt>
        <dd>This is the Lions 3<sup>rd</sup> of July celebration, 6-8</dd>";
      };
      $event=mktime (19,0,0,7,12,2007); // 19:0 7/12/2007
      if (time() <=  $event + 3600) {
        $count++;
        echo "<dt>" . date('l, F d, g:i a',$event) . ", " .
        "Eagle River Band Shell</dt>
        <dd>This is for the first Thursday of Bear Paw. Setup 6:30.</dd>";
      };
        $event=mktime (14,0,0,7,14,2007); // 3:0 7/14/2007
        if (time() <=  $event + 3600) {
          $count++;
          echo "<dt>" . date('l, F d, g:i a',$event) . ", " .
          "Petrovitch Park, 4<sup>th</sup> and E in Anchorage</dt>
          <dd>Chugiak Eagle River Community Band: setup at 2:30, play 3-4</dd>";
      };
        $event=mktime (19,0,0,8,9,2007); // 19:0 5/31/2007
        if (time() <=  $event + 3600) {
          $count++;
          echo "<dt>" . date('l, F d, g:i a',$event) . ", " .
          "Eagle River Band Shell</dt>
          <dd>Chugiak Eagle River Community Band: setup at 6:30</dd>";
        };
          $event=mktime (14,0,0,8,11,2007); // 3:0 6/23/2007
          if (time() <=  $event + 3600) {
            $count++;
            echo "<dt>" . date('l, F d, g:i a',$event) . ", " .
            "Petrovitch Park, 4<sup>th</sup> and E in Anchorage</dt>
            <dd>Chugiak Eagle River Community Band: setup at 2:30, play 3-4</dd>";
        };
          $event=mktime (19,0,0,8,29,2007); // 19:0 8/29/2007
          if (time() <=  $event + 3600) {
            $count++;
            echo "<dt>" . date('l, F d, g:i a',$event) . ", " .
            "Collony stage, State Fair grounds in Palmer.</dt>
            <dd>Concert at the State Fair in Palmer: Setup at 6:30</dd>";
          };
    if ($count < 1) {echo "<dt>Nothing scheduled</dt>"; };
    ?>

    </dl>

  <?php require_once ("footer.inc"); ?>

  </div> <!-- end content -->

  </body>
  </html>