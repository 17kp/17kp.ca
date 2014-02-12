<?php

require_once 'urls.php';

$shortUrl = str_replace('/', '', $_SERVER['REDIRECT_URL']);

if (!isset($urls[$shortUrl])) {
  header('Location: http://17thousandpages.ca', true, 301);
  exit;
}

header('Location: ' . $urls[$shortUrl], true, 301);
