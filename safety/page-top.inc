<?php  
require_once 'site.cfg';  // configuration for client
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
  <?php 
    // Load page header
    require_once 'page-head.inc'; 
  ?>
</head>

<body id="page-body">
  <div id="structure">
    <?php 
      require_once ("page-banner.inc");
      require_once ("page-navbar.inc"); 
    ?>
  </div><!-- structure -->
