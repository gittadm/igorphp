<?php

function solveTask1()
{
    // Дан массив. Найти сумму четных чисел

    /*
     * Многосторочный комментайри
     * Многосторочный комментайри
     * Многосторочный комментайри
     * Многосторочный комментайри
     */

    $a = []; // $a = array();
    $n = 3;

    for ($i = 0; $i < $n; $i++) {
        // $a[$i] = mt_rand(0, 10);
        $a[] = mt_rand(0, 10);
    }

    print_r($a);

    $sum = 0;  // Ctrl+Alt+L
    for ($i = 0; $i < count($a); $i++) {
        if ($a[$i] % 2 == 0) {
            $sum += $a[$i];
            // $sum++;  <-> $sum += 10; <-> $sum = $sum + 888;
            // $sum--;  <-> $sum -= 10; <-> $sum = $sum - 888;
            // ++$sum; $sum++;
            // $x = $s++;  $x = ++$s;
            // $s++;
            // $x = $s;
        }
    }

    echo 'Sum: ' . $sum;
}

function solveTask2()
{
    // Дан массив. Найти кол-во четных чисел, больших 4,
    // или нечетных, меньших или равных 5

    $a = [];
    $n = 5;

    for ($i = 0; $i < $n; $i++) {
        // $a[$i] = mt_rand(0, 10);
        $a[] = mt_rand(0, 10);
    }

    print_r($a);

    $count = 0;
    // Дан массив. Найти кол-во четных чисел, больших 4,
    // или нечетных, меньших или равных 5
    for ($i = 0; $i < count($a); $i++) {
        if (($a[$i] % 2 == 0 && $a[$i] > 4) || ($a[$i] % 2 != 0 && $a[$i] <= 5)) {
            $count++;
        } elseif (1 > 3) {
            $count += 2;
        } else {
            $count--;
        }
    }

    $a = 1;
    $b = '1';

    if ($a == $b) {
    }

    if ($a === $b) { // строгое сравнение: и типы, и значения должны быть равны

    }

    $a = 0;
    if ($b > 10) {
        $a = 8;
    } else {
        $a = $b + 1;
    }

    $a = $b > 10 ? 8 : $b + 1;

    echo 'Count: ' . $count;
}

function solveTask3()
{
    $a = [];
    $n = 5;

    for ($i = 0; $i < $n; $i++) {
        // $a[$i] = mt_rand(0, 10);
        $a[] = mt_rand(0, 10);
    }

    // Дан массив. Найти сумму четных чисел

    foreach ($a as $value) {
        echo $value . ' ';
        if ($value % 2 == 0) {
            $sum += $value;
        }
    }

    foreach ($a as $i => $value) {
        echo $value . ' - ' . $i . '; ';
        echo "{$value} - {$i};";
        if ($value % 2 == 0) {
            $sum += $value;
        }

        echo 'Hello $value';
        echo "Hello {$value}";
    }

    print_r($a);

    foreach ($a as $i => &$value) {
        $value++;
    }

    print_r($a);
}

function solveTask4()
{
    $a = [1, 3, 6, 7];

    $a[100] = 0;

    unset($a[2]);

    $clients = [
        [
            'name' => 'Petr',
            'year' => 1990,
            'price' => 700,
        ],
        [
            'name' => 'Ivan',
            'year' => 1994,
            'price' => 900,
        ],
        [
            'name' => 'Ivan',
            'year' => 1990,
            'price' => 100,
        ],
    ];

    $sum = 0;
    foreach ($clients as $client) {
        $sum += $client['price'];
    }
    echo $sum . '<hr>';

    echo $clients[1]['year'] . '<hr>';

    print_r($clients);
}

function genMatrix(int $n = 5, int $m = 5): array
{
    $a = [];
    for ($i = 0; $i < $n; $i++) {
        $row = [];
        for ($j = 0; $j < $m; $j++) {
            $row[] = mt_rand(0, 9);
        }
        $a[] = $row;
    }

    return $a;
}

function showMatrix(array $a): void
{
    foreach ($a as $row) {
        foreach ($row as $value) {
            echo $value . ' ';
        }
        echo '<br>';
    }
}

function findMatrixMax(int $n = 4, int $m = 4): int
{
    // Дана матрица чисел. Найти наибольшее число.

    $a = genMatrix($n, $m);
    showMatrix($a);

    $max = $a[0][0];
    foreach ($a as $row) {
        foreach ($row as $value) {
            if ($value > $max) {
                $max = $value;
            }
        }
    }

    return $max;

    // return 5;

//    $a = 2;
//    if ($a > 1) {
//        return 1;
//    }
//    return 2;
}

$max = findMatrixMax(3, 4);
echo 'Max: ' . $max;


