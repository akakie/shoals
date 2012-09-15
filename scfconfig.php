<?php

/*
 * Simple Contact Form configuration
 */

// "Who to," recipient "description" and destination email addresses
$recipientFile = "scfcontacts.cfg";

// Ban list file
$banListFile = "scfbanlist.cfg";

// Whom to email regarding errors and such-like?  A space-comma-delimited
// list of email addresses.
$errorsTo = "";

// A space-comma-delimited list of email addresses that'll be "Cc"d on
// anything to to any of the regular recipients.
$mailAlso = "";

// Which form fields are optional.  It is assumed that nobody would
// want comments to be optional.
$requireName  = true;	// Require user put something in for a name?
$requireSubj  = true;	// Require user put in a subject?
$requireEmail = true;	// Require user put in a reply (from) email address?

// Info to optionally add to emailed form.  Change to true for each
// you want.  Will be stashed in X-Headers.
$reportRemoteHost  = true;
$reportRemoteUser  = true;
$reportRemoteAddr  = true;
$reportRemoteIdent = true;	// Note that identd/auth is unreliable
$reportOrigReferer = true;

// Add distinctive prefix to "Subject:" in "[]" field?
// The "distinctive prefix" will be the sole contents of the "Subject:"
// line, less the "[]", if $requireSubj is false and there's no
// Subject.
$addSubjSig = false;

// Default "Subject:" line or "distinctive prefix" if $addSubjSig
// is true and there's a subject provided.
//$dfltSubj = "contact form";
$dfltSubj = $_SERVER['SERVER_NAME'] . " contact";

// Allowed referers - domains/IPs you will allow this processor to
// be "called" from.  You probably want this to be, for example, the
// hostname of the host your form page is on.
//
// WARNING: If this is empty, *any* host can post to this script!
// Obviously this being empty is NOT recommended.
//
$allowedReferers = array(
		'communityband.org',
		'shoalscommunityband.org',
    'localhost'
);

// Tell $errorsTo recipient about invalid referer hits?
$adviseOnReferer = true;

// Log invalid referer hits?
$logOnReferer = true;

// Tell 'em they're banned, or silently discard?
$warnBanned = true;

// Tell $errorsTo recipient about banned attempts?
$adviseOnBan = true;

// Log banned attempts?
$logOnBan = true;

?>
