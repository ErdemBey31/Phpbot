<?php

use SergiX44\Nutgram\Nutgram;

$bot = new Nutgram($_ENV['TOKEN']);

$bot->onCommand('start', function(Nutgram $bot) {
    $bot->sendMessage('Ciao!');
});

$bot->onText('My name is {name}', function(Nutgram $bot, string $name) {
    $bot->sendMessage("Hi $name");
});

$bot->run();
