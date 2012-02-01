<?php
// ===========================================================================================
//
// common.php
//
// Description: Use for header, footer and general links.
//
// Author: Mikael Roos
//
// History:
// 2010-09-13: Change refToThisPage after Sharpless pointed out misplaced serverPort. Updated it to work
// for https.
// 


// -------------------------------------------------------------------------------------------
//
// Common header
//
$header = <<<EOD
<nav class='top'>
<ul>
<li><a href="index.php">Home</a>
<li><a href="http://github.com/mosbth/Greco">GitHub</a>
<li><a href="template.php">Template</a>
<li><a href='source.php'>Sourcecode</a>
<li><a href='about.php'>About</a>
</ul>
</nav>
EOD;


// -------------------------------------------------------------------------------------------
//
// Common footer, including helpful validation tools.
//

// Create link to current page
$refToThisPage = "http";
$refToThisPage .= (@$_SERVER["HTTPS"] == "on") ? 's' : '';
$refToThisPage .= "://";
$serverPort = ($_SERVER["SERVER_PORT"] == "80") ? '' :
	(($_SERVER["SERVER_PORT"] == 443 && @$_SERVER["HTTPS"] == "on") ? ''	: ":{$_SERVER['SERVER_PORT']}");
$refToThisPage .= $_SERVER["SERVER_NAME"] . $serverPort . $_SERVER["REQUEST_URI"];

$footer = <<<EOD
<div class='copyright'>
<pre>
 .                        
..:    &copy; Mikael Roos, 2010
</pre>
</div>
<nav class='general-links'>
	<ul>
	<li><a href="http://catb.org/esr/faqs/hacker-howto.html">How to become a hacker</a>
	<li><a href="http://www.alistapart.com/">A List Apart</a>
	<li><a href="http://html5.org/">html5.org</a>
	<li><a href="http://webdesignledger.com/tools/10-super-useful-tools-for-choosing-the-right-color-palette">ColorTools</a>
	</ul>
</nav>
<nav class='validation-tools'>
	<ul>
	<li><a href='http://jigsaw.w3.org/css-validator/check/referer'>CSS</a>
	<li><a href='http://validator.w3.org/check/referer'>XHTML</a>
	<li><a href='http://validator.w3.org/checklink?uri={$refToThisPage}'>Links</a>
	<li><a href='http://html5.validator.nu/?doc={$refToThisPage}'>HTML5</a>
	<li><a href="http://validator.w3.org/unicorn/check?ucn_uri=referer&amp;ucn_task=conformance">Unicorn</a>
	<li><a href="http://www.w3.org/2009/cheatsheet/">CheatSheet</a>
</ul>
</nav>
EOD;


?>