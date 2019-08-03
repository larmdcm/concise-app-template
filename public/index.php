<?php

$app = require __DIR__ . '/../bootstrap/app.php';

$response = $app->run();

$response->send();