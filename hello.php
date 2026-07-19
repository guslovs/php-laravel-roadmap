<?php

declare(strict_types=1);

function setAge(int $age): int {
    if ($age < 0) {
        throw new InvalidArgumentException("Age cannot be negative, got: $age");
    }

    return $age;
}

try {
    echo setAge(19) . "\n";
    echo setAge(-5) . "\n";
    echo "This line never runs\n";
} catch (InvalidArgumentException $e) {
    echo "Rejected: " . $e->getMessage() . "\n";
}