<?php
// Подключаем автозагрузчик Composer
require 'vendor/autoload.php';

// Указываем настройки для MadelineProto
use danog\MadelineProto\API;

$settings = [
    'app_info' => [
        'api_id' => '23691884',    // Замените на ваш api_id, который можно получить в Telegram через @MyTelegramBot
        'api_hash' => '41c72709ba6a1cec89ce03f5a9f2ecb3', // Замените на ваш api_hash, который можно получить в Telegram через @MyTelegramBot
    ]
];

// Создаем объект API MadelineProto
$MadelineProto = new API('session.madeline', $settings);

// Запускаем сессию (или восстанавливаем, если уже была создана)
$MadelineProto->start();

// Отправляем сообщение
$MadelineProto->messages->sendMessage([
    'peer' => '@testwhatstyle_bot', // Замените на username (или chat_id) получателя
    'message' => 'Hello from MadelineProto!'  // Сообщение, которое хотите отправить
]);

echo "Message sent!";
