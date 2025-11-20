<?php
// Portable mode: disable database usage for the Result module.
// This avoids any need for MySQL/PostgreSQL when running the site locally.

define('RESULTS_PORTABLE_MODE', true);

// No $dbh connection is created in this portable version.
$dbh = null;
?>
