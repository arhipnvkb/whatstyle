<?php
// Подключаем библиотеку MadelineProto
require 'https://phar.madelineproto.xyz/madeline.php';

// Подключаем нужный класс из библиотеки
use danog\MadelineProto\API;

// Telegram API настройки
$settings = [
    'app_info' => [
        'api_id' => '23691884',  // Замените на ваш API ID
        'api_hash' => '41c72709ba6a1cec89ce03f5a9f2ecb3',  // Замените на ваш API Hash
    ]
];

// Инициализация MadelineProto
$MadelineProto = new API('session.madeline', $settings);

try {
    $MadelineProto->start();  // Запуск авторизации
    echo "Авторизация прошла успешно!\n";
    
    // Пример отправки сообщения
    $MadelineProto->messages->sendMessage([
        'peer' => '@arhip_nvkb',  // Замените на имя пользователя или ID чата
        'message' => 'Привет, это тестовое сообщение от MadelineProto на Railway!',
    ]);
} catch (\Exception $e) {
    echo "Ошибка: " . $e->getMessage();
}
?>
