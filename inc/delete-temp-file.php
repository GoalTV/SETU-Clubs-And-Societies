<?php
// Get the filename to delete from the POST data
$filename = $_POST['filename'];
unlink($filename);
?>
