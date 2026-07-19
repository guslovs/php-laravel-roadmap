<?php

declare(strict_types=1);

namespace App;

class FoodCategory implements Category {
    public function name(): string {
        return "Food";
    }

    public function icon(): string {
        return "🍔";
    }
}