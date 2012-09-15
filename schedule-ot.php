<!-- 
	Schedule driver for the other events.
	Include in home page.
-->
    <dt>Other events:</dt>
    <dd>Other upcoming <a href="schedule-other.php">events</a> reported by our members.
    <?php
    // outputs e.g.  somefile.txt was last modified: December 29 2002 22:16:23.

    $filename = 'schedule-other.php';
    if (file_exists($filename)) {
        echo "(updated: " . date ("F d Y H:i.", filemtime($filename)) . ")";
    }
    ?></dd>