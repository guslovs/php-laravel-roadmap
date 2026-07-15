<?php
declare(strict_types=1);

require 'vendor/autoload.php';

use App\EmailNotifier;

$n = new EmailNotifier();
$n->send("hello");