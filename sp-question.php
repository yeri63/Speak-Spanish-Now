<?php
session_start();
header("Content-type: text/xml");

# Number of records.
$records = 10;
$theme = "question";

# Recall prior variable state;
$i = $_SESSION['index'];

# Initialize swhen starting the guess.
if (!isset($i)) 
    $i = 0;

# Clear index variable which may have been set from other program.
if ($i > $records) 
    $i = 0;

$spa = array(
	"Cuanto  cuesta?",
	"Donde  esta  el  bano?",
	"Que  hora  es?",
	"Pasa  algo?",
	"Es  esto  correcto?",
	"Me  equivocado?",
	"Me  puede  ayudar  con  esto?",
	"Puedes  traerme...  por favor?",
	"Puedo  entrar?",
	"Estas  listo?");

$eng = array(
	"How  much  is  this?",
	"Where's  the  bathroom?",
	"What  time  is  it?",
	"Is  something  wrong?",
	"Is  this  right?",
	"Was  I  wrong?",
	"Can  you  help  me  with  this?",
	"Can  you  bring  me...  please?",
	"Can  I  come  in?",
	"Are  you  ready?");

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

