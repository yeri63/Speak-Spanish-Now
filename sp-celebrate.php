<?php
session_start();
header("Content-type: text/xml");

# Number of records.
$records = 14;
$theme = "celebration";

# Recall prior variable state;
$i = $_SESSION['index'];

# Initialize swhen starting the guess.
if (!isset($i)) 
    $i = 0;

# Clear index variable which may have been set from other program.
if ($i > $records) 
    $i = 0;

$spa = array(
	"Cuanto  tiempo  sin  verlo(a)!",
	"Feliz  cumpleanos!",
	"Buena  suerte!",
	"Alto!",
	"Salud!",
	"Que  te  mejores",
	"Buen  provecho",
	"Cuidate",
	"Felicitaciones",
	"Bien  hecho!",
	"Genio!",
	"Estupendo",
	"Genial",
	"Increible!");

$eng = array(
	"Long  time  no  see!",
	"Happy  birthday!",
	"Good  luck!",
	"Stop!",
	"Cheers!",
	"Get  well  soon",
	"Bon  appetit",
	"Take  care",
	"Congratulations",
	"Well  done!",
	"Genius!",
	"Stupendous  or  Amazing",
    "Great  or  Awesome",
	"Incredible!  or  Impressive!");

echo "<CiscoIPPhoneText>";
echo "  <Title>Speak Spanish Now!</Title>";
echo "  <Text>";

echo "E: ".$eng[$i]."\n";
echo "S: ".$spa[$i]."\n";

echo "  </Text>";
echo "	<Prompt>Press for next ".$theme.".</Prompt>";
echo "</CiscoIPPhoneText>";

# Update index to point to next record.
$i = ++$i % $records;

# Save current variable state.
$_SESSION['index'] = $i;
?>

