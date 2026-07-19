<?php

declare(strict_types=1);

namespace App;

class TransportCategory implements Category {
    public function name(): string {
        return "Transport";
    }

    public function icon(): string {
        return "🚌";
    }
}