<?php
$file = $_SERVER['DOCUMENT_ROOT'] . 'Apache.zip';

header('Content-Type: text/plain');
header('Content-Disposition: attachment; filename="r.txt"');

header('Content-Length: ' . filesize($file));

readfile($file);
exit;
?>
