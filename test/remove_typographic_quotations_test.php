<?php

require __DIR__ . '/../vendor/autoload.php';

use CaboLabs\PhBasic\BasicString;

$input = "These ‘are’ single, and these are “double” typographic quotation marks";
$expected_output = "These 'are' single, and these are \"double\" typographic quotation marks";

$output = BasicString::remove_typographic_quotations($input);

if ($output != $expected_output)
{
   echo "ERROR". PHP_EOL;
}
else
{
   echo "OK". PHP_EOL;
}