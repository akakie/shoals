<?php
// site configuration not likely to be changed often (or at all)

// $inDev = true;  // Site development is active. Disable robots and issue warning.
// The following definitions are always required
$pageHead     = "page-head.inc";
$pageTop      = "page-top.inc";
$pageEnd      = "page-end.inc";

if($dataFile != '') { require_once 'data-read.inc';}  // function to read a line of data

require_once $pageTop;
// php functions to include

?>