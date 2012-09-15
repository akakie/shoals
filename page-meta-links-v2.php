<!-- dependency: must follow site.cfg -->
<title><?php echo $org.": ".$pageTitle; ?></title>
<meta http-equiv="Content-Type" content="application/xhtml+xml; charset=UTF-8" />
<meta name="language" content="en" />
<meta name="company" content=<?php echo  $company; ?> />
<meta name="Author" content="L. Overton" />
<meta name="copyright" content="Creative Commons Attribution 2.5 License; 2005" />
<meta name="robots" content="all" />

<meta name="description" content=<?php echo $pageContent; ?> />
<meta name="keywords" content="Shoals,Muscle Shoals,AL,Alabama,music,town band,city band,volunteer,
   concert band, wind symphony,
  <?php echo $pageKeywords; ?>" />
<meta http-equiv="Content-Style-Type" content="text/css" />

<link rel="stylesheet" href="/css/scb-layout.css" media="screen" />
<link rel="stylesheet" href="/css/scb-format.css" media="all" />
<link rel="stylesheet" href="/css/scb-menu.css" media="screen" />

<link rel="stylesheet" href="/css/scb-print.css" media="print" />

<?php if($pageStyle != '') {require_once $pageStyle;} ?>