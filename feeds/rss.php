<?php

header("Content-Type: application/xml; charset=UTF-8");

$xml = new XMLWriter();

$xml->openMemory();

$xml->StartDocument('1.0', 'utf-8');

$xml->StartElement('rss');
$xml->writeAttribute('version', '2.0');

$xml->StartElement('channel');
$xml->writeAttribute('version', '2.0');

$xml->StartElement('title');
$xml->writeAttribute('version', '2.0');

$xml->StartElement('language');
$xml->text('en-us');
$xml->EndElement();


$xml->endElement(); // End <rss>
$xml->EndDocument();

print $xml->outputMemory(TRUE);

