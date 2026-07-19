<?php
declare(strict_types=1);

require 'vendor/autoload.php';

use App\Report;
use App\Expense;
use App\FoodCategory;
use App\TransportCategory;

$report = new Report();
$report->add(new Expense("Coffee", 350, new FoodCategory()));
$report->add(new Expense("Lunch", 1200, new FoodCategory()));
$report->add(new Expense("Bus ticket", 250, new TransportCategory()));

$report->print();