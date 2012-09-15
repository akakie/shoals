<?php
  // Configure page headers
  $pageTitle    = "Governance";
  $pageContent  = "Board of Directors";
  $pageKeywords = "board, directors, governance, management";
  $pageStyle    = "";
  $dataFile     = "schedule-board.csv";
  $sortTable    =  false;
  $download     =  false;
  
  require_once 'site.inc';  // site-wide definitions

  // page specific configuration
  
  require_once 'print-event.inc';
  require_once 'venue-list.inc';
  
  $pageNotes = 
    '<h2>ToDo List</h2>
    <p>For this page</p>
    <ul>
      <li>Review first paragraphs</li>
      <li>√ Add phone number</li>
      <li>Add ad-hoc names, committees</li>
    </ul>
    ';
  require_once 'page-sidebar.inc';
  
?>

<div id="content"> 
  
  <?php
    $theDate = time();
    $have_meeting = false;
    
    if(($fp = fopen($dataFile, "r")) == false) {
         die("Can't open data file '$dataFile'.\n");
    }
    while($inString = read_file_line($fp)) {
        list( $date,$location,$event,$note ) =
        explode("\t", $inString);
        $date=strtotime($date);
        if($date >= $theDate && $event == "m") {
          $meeting = array($date,$location,$event,$note);
          $have_meeting = true;
          break;
        }
    }
    fclose($fp);
  ?>

  <h1>Board of Directors</h1>

  <p>The Shoals Concert Band is governed by a board of directors elected at the second rehearsal in October each year by members of the band. The board is elected for a one year term. The board members elect their own officers: president, vice-president, secretary, and treasurer. Other titles are for information only. Advisors to the board, including music directors, are not be members of the board and do not vote.</p>

  <p>Meetings are normally held the second Wednesday of each month, usually with a break in late summer. Send items for the agenda to <a href="contacts.php?president" title="President">President</a> at least two days before the meeting. 
  <?php
  
  if($have_meeting) {

    echo "The next meeting is ";
    print_event($meeting,$venue_list);
  }
  else {
    echo " No future meeting is presently scheduled.";
  }
  ?>
  </p>
  <p>If you cannot attend a scheduled meeting, please notify the board by phone or US Postal Service. The address is:
  <blockquote>
      <address>
        <?php 
        echo $addressMail."<br/>"
        ."(256) 757-9788 home or (256) 710-0506"
        ; ?>
      </address>
    </blockquote>
  </p>
    <!-- <a href="board-meeting.php">Notices of meetings</a>
    and 
    <a href="board-archive.php"
    title="Highlights of previous board meetings">
    highlights of previous board meetings</a> 
    are published on the web site.-->
  </p> 

  <dl>
    <dt id="directors">Current directors</dt>
    <dd> 
      <table title="Current members of Board of Directors">
        <tr><td>Judy Tricoli</td><td>President</td></tr>
        <tr><td>Jeannie Jordan</td><td>Vice President</td></tr>
        <tr><td>Fred Joly</td><td>Secretary</td></tr>
        <tr><td>Beverly Deal</td><td>Treasurer</td></tr>
        <tr><td>Max Williams</td><td></td></tr>
        <tr><td>Gene Gooch</td><td></td></tr>
        <tr><td>Jesse Joiner</td><td></td></tr>
        <tr><td>W. C. Simpson</td><td></td></tr>
        <tr><td>Sonny Morris</td><td></td></tr>
        <tr><td>Katie Gregg</td><td></td></tr>
      </table>
    </dd>
    <!-- 
    <dt id="advisors">Advisors to the board</dt>
    <dd>
      <table title="Current advisors to the Board">
        <tr><td></td><td>Music director</td></tr>

      </table>
      -->
    </dd>

  </dl>

  <?php require_once ("page-end.inc"); ?>