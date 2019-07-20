<?php

require __DIR__ . '/../bootstrap/bootstrap.php';

Container::get('app')->run()->send();