<?php

$name = "Joshua Andrew James Wilson";

$ename = explode(" ",$name);

$fname = $ename[0];
$mname = $ename[1];
$lname = end($ename);

?>

<b>Your Name:</b> <?php echo $name; ?><br>
<hr>
<b>First Name:</b> <?php echo $fname; ?>
<br>
<b>Middle Name:</b> <?php echo $mname; ?>
<br>
<b>Last Name:</b> <?php echo $lname; ?>