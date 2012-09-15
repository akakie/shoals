  <?php
  
  // Read a line from a data file, stripping comments and blank lines
  function read_file_line($fp) {
      while(($inString = fgets($fp, 2048)) != false) {
    $inString = rtrim(preg_replace('/\s*#.*/', '', $inString));
    if(!empty($inString))
        break;
      }
      return $inString;
    }
  ?>
