<!--
   scform.php - Web page form for Simple Contact Form package
   Copyright (C) 2002-2004 by James S. Seymour (jseymour [at] LinxNet [dot] com)
   (See "License", below.)  Release 1.2.3.
  
   License:
      This program is free software; you can redistribute it and/or
      modify it under the terms of the GNU General Public License
      as published by the Free Software Foundation; either version 2
      of the License, or (at your option) any later version.
      
      This program is distributed in the hope that it will be useful,
      but WITHOUT ANY WARRANTY; without even the implied warranty of
      MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
      GNU General Public License for more details.
      
      You may have received a copy of the GNU General Public License
      along with this program; if not, write to the Free Software
      Foundation, Inc., 59 Temple Place - Suite 330, Boston, MA  02111-1307,
      USA.
      
      An on-line copy of the GNU General Public License can be found
      http://www.fsf.org/copyleft/gpl.html.
  
   The SCForm Home Page is at:
  
      http://jimsun.LinxNet.com/SCForm.html
-->

<div id="contact-form">
<div align="center"><table><tr><td>
<form action="scformproc.php" method="post">
    <table>
	<tr>
	    <td align="right">
		Send To:
	    </td>
	    <td align="left">
		    <?php
			require 'scfconfig.php';	// Get our config

			// Read a line from a config file, stripping comments
			// and blank lines
			function read_file_line($fp) {
			    while(($inString = fgets($fp, 2048)) != false) {
				$inString = rtrim(preg_replace('/\s*#.*/', '',
				    $inString));
				if(!empty($inString))
				    break;
			    }

			    return $inString;
			}

			// Read the contact list keys and descriptions into hash
			if(($fp = fopen($recipientFile, "r")) == false) {
			     die("Can't open data file '$recipientFile'.\n");
			}
			while($inString = read_file_line($fp)) {
			    list($key, $description, $value) =
				explode(':', $inString);
			    $options[$key] = $description;
			}
			fclose($fp);

			// If we've more than one choice: present a menu
			if(count($options) > 1) {
			    // If we were given a single arg, that'll be the
			    // selected menu item.
			    if(count($_GET) == 1)
				$selected = strtolower(key($_GET));
			    print("<select name=\"whoto\">\n");
			    foreach($options as $key => $description) {
				print("<option ");
				if(strtolower($key) == $selected)
				    print("selected ");
				print("value=\"" . trim($key) .  "\">" .
				       trim($description) . "\n");
			    }
			    print("</select>\n");
			} else {
			    // There'll be only one...
			    foreach($options as $key => $description) {
				print("<input type=\"hidden\" name=\"whoto\" value=\"" .
				       trim($key) . "\" />" . trim($description) . "\n");
			    }
			}

			// Used by the form processor acknowledgment to create a
			// "take me back" link.
			if(!empty($_SERVER['HTTP_REFERER'])) {
			    print("<input type=\"hidden\" name=\"orig_referer\" value=\"" .
				   $_SERVER['HTTP_REFERER'] . "\">\n");
			}
		    ?>
	    </td>
	</tr>
	<tr>
	    <td align="right">
		Your name:
	    </td>
	    <td align="left">
		<input type="text" name="name" size=30 />
	    </td>
	</tr>
	<tr>
	    <td align="right">
		Email address:
	    </td>
	    <td align="left">
		<input type="text" name="email" size=30 />
	    </td>
	</tr>
	<tr>
	    <td align="right">
		Subject:
	    </td>
	    <td align="left">
		<input type="text" name="subject" size=30 />
	    </td>
	</tr>
    </table>
    <p>
    Please enter your comments below.  Click &quot;Submit&quot; when done.
    <br />
    <textarea name="comments" rows=10 cols=50></textarea>
    </p>
    <p>
    <input type="submit" name="s" value="Submit" />
    </p>
</form>
</td></tr></table>
</div> <!-- end contact-form -->

