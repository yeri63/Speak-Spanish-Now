<?php
session_start();
header("Content-type: text/xml");

# Number of records.
$records = 14;
$theme = "greeting";

# Recall prior variable state;
$i = $_SESSION['index'];

# Initialize swhen starting the guess.
if (!isset($i)) 
    $i = 0;

# Clear index variable which may have been set from other program.
if ($i > $records) 
    $i = 0;

$spa = array(
	"Hola",
	"Que  tal?",
	"Que  pasa?",
    "Como  te  va?",
	"Bien",
	"Muy  bien",
	"Asi-asi",
	"No  tan  bien",
	"Y  tu?",
	"Me  llamo...",
	"Como  te  llamas?",
	"Mucho  gusto",
	"Placer",
	"Encantado/Encantada");

$eng = array(
	"Hello",
	"How  are  you?",
	"What's  up?",
	"How're  you  doing?",
	"Good",
	"Very  good",
	"So-so",
	"Not  so  good",
	"And  you?",
	"My  name  is...",
	"What's  your  name?",
	"Nice  to  meet  you",
	"A  pleasure",
	"Charmed,  Likewise");

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

