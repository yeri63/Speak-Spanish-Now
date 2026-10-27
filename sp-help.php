<?php
session_start();
header("Content-type: text/xml");

# Number of records.
$records = 11;
$theme = "helpful phrase";

# Recall prior variable state;
$i = $_SESSION['index'];

# Initialize swhen starting the guess.
if (!isset($i)) 
    $i = 0;

# Clear index variable which may have been set from other program.
if ($i > $records) 
    $i = 0;

$spa = array(
	"Necesito  ayuda",
	"Llamame  cuando  llegues",
	"Me  voy  a  casa",
	"Necesito  ir  a...",
	"Como  llego  hasta  ahi?",
	"No  lo  se",
	"No  tengo  idea",
	"Lo  entiendes?",
	"No  entiendo",
	"Quiero...",
	"Puede  hablar  mas  despacio,  por  favor?");

$eng = array(
	"I  need  help",
	"Call  me  when  you  arrive",
	"I'm  going  home",
	"I  need  to  go  to...",
	"How  do  I  get  there?",
	"I  don't  know",
	"I  have  no  idea",
	"Do  you  understand?",
	"I  don't  understand",
	"I  want...",
	"Can  you  speak  slowly,  please?");

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

