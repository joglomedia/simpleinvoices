<?php

include('./config/config.php');

$display_block ="

<b>Help</b>
<br>
<br>
For information regarding the setup,installation, and use of Simple Invoices please refer to the Instructions sub-menu in the Option menu. <br>
<br>For other queries please refer to the Simple Invoices website <a href='http://simpleinvoices.sf.net'>http://simpleinvoices.sf.net</a> and the Simple Invoices google-group at <a href='http://groups.google.com/group/simpleinvoices'>http://groups.google.com/group/simpleinvoices</a>

";




?>
<html>
<head>

<script type="text/javascript" src="niftycube.js"></script>
<script type="text/javascript">
window.onload=function(){
Nifty("div#container");
Nifty("div#content,div#nav","same-height small");
Nifty("div#header,div#footer","small");
}
</script>


<title>Simple Invoices - Help
</title>
<?php include('./include/menu.php'); ?>
<?php include('./config/config.php'); ?>
<body>
<?php
$mid->printMenu('hormenu1');
$mid->printFooter();
?>

<link rel="stylesheet" type="text/css" href="themes/<?php echo $theme; ?>/tables.css">
<br>
<div id="container">

<div id="header"></div>
<?php echo $display_block; ?>
<div id="footer"></div>
</div>
</div>

</body>

