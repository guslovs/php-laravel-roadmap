<?php

declare(strict_types=1);

namespace App;

trait FormatsMoney {
    public function formatMoney(int $cents): string {
        return number_format($cents / 100, 2) . "€ ";
    }
}