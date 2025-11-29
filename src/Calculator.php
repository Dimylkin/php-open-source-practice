<?php

declare(strict_types=1);


/**
 * Класс для арифметических вычислений
 */
class Calculator() {
    /**
     * Складывает два числа
     * @param float $a Первое число
     * @param float $b Второе число
     * @return float Итоговая сумма
     */
    public function add(float $a, float $b): float {
        return $a + $b;
    }

    /**
     * Умножает два числа
     * @param float $a Первое число
     * @param float $b Второе число
     * @return float Итоговое произведение
     */
    public function multiply(float $a, float $b): float {
        return $a * $b;
    }
}