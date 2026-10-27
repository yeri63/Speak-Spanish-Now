<?php
session_start();
header("Content-type: text/xml");

# Number of records.
$records = 5;
$theme = "polite phrase";

# Recall prior variable state;
$i = $_SESSION['index'];

# Initialize swhen starting the guess.
if (!isset($i)) 
    $i = 0;

# Clear index variable which may have been set from other program.
if ($i > $records) 
    $i = 0;

$spa = array(
	"Gracias",
	"De  nada",
	"No  hay  de  que",
	"Disculpe",
	"Lo  siento");

$eng = array(
	"Thank  you",
	"You're  welcome",
	"No  problem",
	"Excuse  me",
	"I'm  sorry");

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

