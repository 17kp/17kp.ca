<?php

function goToMainSite () {
  header('Location: http://17thousandpages.ca', true, 301);
  exit;
}

if (empty($_SERVER['REDIRECT_URL'])) {
  goToMainSite();
}

require_once 'urls.php';

$shortUrl = str_replace('/', '', $_SERVER['REDIRECT_URL']);

if (!isset($urls[$shortUrl])) {
  goToMainSite();
}

header('Location: ' . $urls[$shortUrl], true, 301);
