<?php
    session_start();
    header("Content-type: text/xml");

    $_SESSION['hits'] = 1;
    $_SESSION['num1'] = mt_rand(1,10);
    $_SESSION['num2'] = mt_rand(0,10);
?>
<CiscoIPPhoneMenu>
  <Title>Speak Spanish Now!</Title>
  <Prompt>Select a topic.</Prompt>

  <MenuItem>
    <Name>Greetings</Name>
    <URL>http://192.168.3.250/cisco/sp-greet.php</URL>
  </MenuItem>

  <MenuItem>
    <Name>Saying Goodbye</Name>
    <URL>http://192.168.3.250/cisco/sp-goodbye.php</URL>
  </MenuItem>

  <MenuItem>
    <Name>Being Polite</Name>
    <URL>http://192.168.3.250/cisco/sp-polite.php</URL>
  </MenuItem>

  <MenuItem>
    <Name>Interests</Name>
    <URL>http://192.168.3.250/cisco/sp-like.php</URL>
  </MenuItem>

  <MenuItem>
    <Name>Common Questions</Name>
    <URL>http://192.168.3.250/cisco/sp-question.php</URL>
  </MenuItem>

  <MenuItem>
    <Name>Celebrations</Name>
    <URL>http://192.168.3.250/cisco/sp-celebrate.php</URL>
  </MenuItem>

  <MenuItem>
    <Name>Filler Words</Name>
    <URL>http://192.168.3.250/cisco/sp-filler.php</URL>
  </MenuItem>

  <MenuItem>
    <Name>Being Helpful</Name>
    <URL>http://192.168.3.250/cisco/sp-help.php</URL>
  </MenuItem>

  <MenuItem>
    <Name>Idioms</Name>
    <URL>http://192.168.3.250/cisco/sp-idiom.php</URL>
  </MenuItem>

</CiscoIPPhoneMenu>
