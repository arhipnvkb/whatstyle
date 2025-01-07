<?php

require 'vendor/autoload.php';

use danog\MadelineProto\API;
use danog\MadelineProto\Settings;

$settings = [
    'app_info' => [
        'api_id' => '23691884',      // Ваш API ID
        'api_hash' => '41c72709ba6a1cec89ce03f5a9f2ecb3'   // Ваш API Hash
    ]
];

$MadelineProto = new API('session.madeline', $settings);

// Если сессия не была создана, MadelineProto выполнит авторизацию
$MadelineProto->start();

// Получите информацию о себе
$me = $MadelineProto->getSelf();

echo "Вы вошли как: " . $me['username'] . "\n";
