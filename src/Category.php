<?php

declare(strict_types=1);

namespace App;

interface Category {
    public function name(): string;
    public function icon(): string;
}