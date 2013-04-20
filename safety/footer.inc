<!-- Page footer included in most pages. -->

<div id="footer">

  <p title="Date and time stamp the page">

    <?php
    putenv("TZ=America/Anchorage");
    echo "Last modified: " . date( "F d, Y. h:i:s a", getlastmod() );
    ?>
  </p>

  <hr style="clear:both" />

  <div id="footer-links">
    <img
    width="88" height="31"
    style="vertical-align:top;"
    src="somerights20.png"
    alt="Creative Commons License" /><br />

    Except where otherwise noted, this site is licensed under a <br />
    <a href="http://creativecommons.org/licenses/by/2.5/">
      Creative Commons Attribution 2.5 License</a>.

    </div> <!-- end of footer-links -->

  </div> <!-- end of footer -->
