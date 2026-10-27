<?php session_start();
header("Content-type: text/xml");

# Number of records.
$records = 12;
$theme = "idiom";

# Recall prior variable state;
$i = $_SESSION['index'];

# Initialize swhen starting the guess.
if (!isset($i)) 
    $i = 0;

# Clear index variable which may have been set from other program.
if ($i > $records) 
    $i = 0;

$spa = array(
	"Ponte  las  pilas",
	"Papando  moscas",
	"Comiendo  moscas",
	"Buena  onda",
	"Me  pica  el  bagre",
	"Hablando  del  rey  de  Roma",
	"Meter  la  pata",
	"Creerse  la  ultima  coca-cola  del  desierto",
	"Tener  la  cola  sucia",
	"Echale  ganas",
	"Mala  leche",
	"Tirar  la  casa  por  la  ventana");

$eng = array(
	"Snap  out  of  it,  or look  alive",
	"Daydreaming",
	"Talking  a  lot  but  saying  nothing",
	"Good  vibes,  or positive  attitude",
	"I'm  starving!",
	"Speak  of  the  devil",
	"Put  your  foot  in  your  mouth",
	"You're  better  than  anyone  else",
	"Being  sneaky  like  a  fox",
	"Try  your  best",
	"Bad  intentions",
	"Spend  a  lot  of  money");

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

