<!-- Page footer included in most pages. -->

<div id="footer">  

  <p class="datestamp" title="Date and time stamp the page" >

    <?php
    echo "Page last modified: " . date( "F d, Y. h:i:s a", getlastmod() );
    if (file_exists($dataFile)) {
        echo 
        "<br/>" 
        . "Data last modified: " . date ("F d Y H:i:s a.", filemtime($dataFile));
    }
    echo "<br/>";
    
    if( ! empty($pageVersion)) 
    { print 'Page version '.$pageVersion . '<br/>';}
    // parameters: (year, month, day, hour, minute)
     $remainder = countdown(2009,9,1,0,0);
     echo "Reference: ". $remainder[0];

    ?>
  </p>

  <!-- <hr /> -->

  <div id="footer-links">
    <p>
    <img
    width="88" height="31"
    style="vertical-align:top;"
    src="images/somerights20.png"
    alt="Creative Commons License" /><br />

    Except where otherwise noted, this site is licensed under a <br />
    <a href="http://creativecommons.org/licenses/by/2.5/">
      Creative Commons Attribution 2.5 License</a>.
    </p>
  </div> <!-- end of footer-links -->

</div> <!-- end of footer -->
