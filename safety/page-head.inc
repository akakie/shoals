  <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
  <meta name="company" content="Shoals Concert Band" />
  <meta name="Author" content="L. Overton" />
  <meta name="copyright" content="Creative Commons Attribution 2.5 License; 2005" />
  <?php
  if($inDev) {
    echo 
       '<META NAME="ROBOTS" CONTENT="NOINDEX">'
      .'<META NAME="ROBOTS" CONTENT="NOFOLLOW">'
      ;
  }
  else echo '<meta name="robots" content="all" />';
  ?>

  <title>"<?php echo $org.': '.$pageTitle; ?>"</title>
  <meta name="description" content="<?php echo $pageContent; ?>" />
  <meta name="keywords" content="<?php echo $siteKeywords.$pageKeywords; ?>" />
  
  <style type="text/css" media="all">
  /*<![CDATA[*/
      @import "main.css";
      @import "menu.css";
  /*]]>*/
  </style>
  <style type="text/css" media="print">
  /*<![CDATA[*/
      @import "print.css";
  /*]]>*/
  </style>

<?php 
  if($pageStyle != '') {require_once $pageStyle;};
  if($sortTable) {require_once 'sorttable.inc';};
?>