<?php

declare(strict_types=1);

namespace App;
use App\FormatsMoney;
use App\Category;

class Expense {
    use FormatsMoney;

    public function __construct(
        private string $description,
        private int $amountCents,
        private Category $category
    ) {
        if ($this->amountCents < 0) {
            throw new \InvalidArgumentException("Amount cannot be negative");
        }
    }

    public function describe(): string {
        return "{$this->description}: " . $this->formatMoney($this->amountCents) . "(" . $this->category->name() . $this->category->icon() . ")";
    }

    public function getAmountCents(): int {
        return $this->amountCents;
    }
}