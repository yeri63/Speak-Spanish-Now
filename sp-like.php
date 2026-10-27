<?php
session_start();
header("Content-type: text/xml");

# Number of records.
$records = 10;
$theme = "interest";

# Recall prior variable state;
$i = $_SESSION['index'];

# Initialize swhen starting the guess.
if (!isset($i)) 
    $i = 0;

# Clear index variable which may have been set from other program.
if ($i > $records) 
    $i = 0;

$spa = array(
	"Que  te  gusta  hacer?",
	"Mi  pasatiempo  favorito  es...",
	"Cuales  son  tus  pasatiempos?",
	"Que  haces  en  tu  tiempo  libre?",
	"Me  gusta / No  me  gusta...",
	"Me  encanta...",
	"Que  te  gusta  leer?",
	"Que  musica  te  gusta?",
	"Mi  favorito  es...",
	"Me  gusta  ir...");

$eng = array(
	"What  do  you  like  to  do?",
	"My  favorite  hobby  is...",
	"What  are  your  hobbies?",
	"What  do  you  do  in  your  free  time?",
	"I  like / I  don't  like...",
	"I  love...",
	"Do  you  like  to  read?",
	"What  music  do  you  like?",
	"My  favorite  is...",
	"I  like  going  to...");

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

