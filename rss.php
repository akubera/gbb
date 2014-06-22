<?php

header("Content-Type: application/xml; charset=UTF-8");

$xml = new XMLWriter();

$xml->openMemory();

$xml->StartDocument('1.0', 'utf-8');

$xml->startElement('test');
$xml->text('Hello, World!');
$xml->endElement();

$xml->EndDocument();

print $xml->outputMemory(TRUE);

