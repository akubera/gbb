<?php

header("Content-Type: application/xml; charset=UTF-8");

$xml = new XMLWriter();

$xml->openMemory();

$xml->StartDocument('1.0', 'utf-8');

$xml->StartElementNS(null, 'feed', 'http://www.w3.org/2005/Atom');
$xml->writeAttribute('version', '2.0');

$xml->StartElement('id');
$xml->text('http://andrewkubera.info/blog/atom.php');
$xml->EndElement();

$xml->StartElement('title');
$xml->text("Andrew Kubera's Personal Blog");
$xml->EndElement();

$xml->StartElement('updated');
$xml->text("Andrew Kubera's Personal Blog");
$xml->EndElement();

$xml->StartElement('channel');
$xml->writeAttribute('version', '2.0');

$xml->StartElement('title');
$xml->writeAttribute('version', '2.0');

$xml->StartElement('language');
$xml->text('en-us');
$xml->EndElement();


$xml->endElement(); // End <feed>
$xml->EndDocument();

print $xml->outputMemory(TRUE);

