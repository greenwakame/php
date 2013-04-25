<?php
require_once 'ShowFile.php';

try {
	$show_file = new ShowFile(./ShowFile.php);
}
cath (Exception $e) {
	die($e->getMessage());
}

$show_file->showPlain();
echo '<br>';
$show_file->showHighlight();