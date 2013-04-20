<!-- Page footer included in most pages. -->
<!-- CHANGED removed time zone declaration. It is now in the site setup. -->


<div id="footer">

  <p title="Date and time stamp the page">

    <?php
    echo "Last modified: " . date($dateFormat, getlastmod() );
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
