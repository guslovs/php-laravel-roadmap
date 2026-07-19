<?php
declare(strict_types=1);

namespace App;

class Report {
    use FormatsMoney;

    /** @var Expense[] */
    private array $expenses = [];

    public function add(Expense $expense): void {
        $this->expenses[] = $expense;
    }

    public function total(): int {
        $total = 0;
        foreach ($this->expenses as $exp) {
            $total += $exp->getAmountCents();
        }
        return $total;
    }

    public function print(): void {
        foreach ($this->expenses as $exp) {
            echo $exp->describe() . "\n";
        }

        echo "Total: " . $this->formatMoney($this->total());
    }
}