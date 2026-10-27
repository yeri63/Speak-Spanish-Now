<?php
session_start();
header("Content-type: text/xml");

# Number of records.
$records = 11;
$theme = "filler word";

# Recall prior variable state;
$i = $_SESSION['index'];

# Initialize swhen starting the guess.
if (!isset($i)) 
    $i = 0;

# Clear index variable which may have been set from other program.
if ($i > $records) 
    $i = 0;

$spa = array(
	"A  ver...",
	"Pues...",
	"Bueno...",
	"Sabes?",
	"Por  supuesto",
    "Por  otra  parte...",
	"Pero...",
	"De  verdad?",
	"Dios  mio",
	"Entonces...",
	"Asi  que...");

$eng = array(
	"Let's  see...",
	"Well...",
	"Well  then...",
	"You  know?",
	"Of  course",
	"On  another  note...",
	"But...",
	"Really?",
	"Oh  my  god",
	"So...",
	"So... About  that...");

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

