<?php

declare(strict_types=1);

trait Loggable {
    public function log(string $msg): void {
        echo "[LOG] $msg\n";
    }
}

class OrderService {
    use Loggable;

    public function placeOrder(): void {
        $this->log("Payment charged");
    }
}

class PaymentService {
    use Loggable;

    public function charge(): void {
        $this->log("Payment charged");
    }
}

(new OrderService())->placeOrder();
(new PaymentService())->charge();