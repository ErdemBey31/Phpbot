<?php

use Nutgram\Nutgram;

$bot = new Nutgram('6547641979:AAGcBSptkK2EtRqD_w0xSoWYuUHIbsNMeLU');

$bot->onCommand('start', function(Nutgram $bot) {
    $bot->sendMessage('Çalışıyor');
});

$bot->onText('My name is {name}', function(Nutgram $bot, string $name) {
    $bot->sendMessage("Hi $name");
});

$bot->run();
