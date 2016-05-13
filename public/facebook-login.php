<?php

require_once 'setup.php';

$helper = $facebook()->getJavaScriptHelper();
$accessToken = $helper->getAccessToken();
$setAccessToken($accessToken);
