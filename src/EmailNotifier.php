<?php
declare(strict_types=1);

namespace App;

class EmailNotifier implements Notifier {
    public function send(string $message): void {
        echo "EMAIL: $message\n";
    }
}