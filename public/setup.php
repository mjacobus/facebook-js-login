<?php

session_start();

require "../vendor/autoload.php";

$dotenv = new Dotenv\Dotenv(dirname(__DIR__));
$dotenv->load();

$apiId = getenv('FACEBOOK_APP_ID');
$apiSecret = getenv('FACEBOOK_APP_SECRET');

$facebook = new Facebook\Facebook([
    'app_id'                => $apiId,
    'app_secret'            => $apiSecret,
    'default_graph_version' => 'v2.2',
    'default_access_token'  => getAccessToken(),
]);

function getAccessToken()
{
    if (array_key_exists('userToken', $_SESSION)) {
        return $_SESSION['userToken'];
    }
}

$facebook = function () use ($facebook) {
    return $facebook;
};

$userLoggedIn = function () use ($facebook) {
    return getAccessToken() != null;
};

$currentUser = function () use ($facebook) {
    $response = $facebook()->get('/me');
    return $response->getGraphUser();
};

$setAccessToken = function (Facebook\Authentication\AccessToken$token) {
    $token = $token->getValue();
    $_SESSION['userToken'] = $token;
};

$render = function ($template) {
    $file = basename($template);
    include "../pages/$file.php";
};
