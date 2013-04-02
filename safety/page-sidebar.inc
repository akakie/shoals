<div id="sidebar">
  <div id="tidbits" class="sidebar-item">
    <?php 
    // require_once ("search.htmlf"); 
    showWeather($city,$state); 
    echo $siteNotes;
    echo $pageNotes;
    if (null != $pageNav) {require_once $pageNav;}
    // require_once ('sponsors-list.php');
  
    ?>
  </div> <!-- end tidbits -->

</div> <!-- end sidebar -->