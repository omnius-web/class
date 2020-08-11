<?php
require_once 'autoload.php';
use omnius\Hi;
$ok = new Hi('test');
$ok2 = new Hi('omnius');
//echo (new Hi('omnius2'))->test;
//echo $ok2->test;
function test($io1, $io2 = 0)
{
  echo $io2;
}
test(1);
?>
