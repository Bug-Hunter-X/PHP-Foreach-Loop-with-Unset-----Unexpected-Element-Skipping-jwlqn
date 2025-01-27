# PHP Foreach Loop with Unset() - Unexpected Element Skipping

This repository demonstrates a common issue in PHP when using the `unset()` function inside a `foreach` loop to remove elements from an array.  Modifying the array during iteration leads to unexpected behavior and skipped elements.

The `bug.php` file shows the incorrect approach. The `bugSolution.php` file presents a correct solution using `array_filter()`.

## Bug
The problem lies in modifying the array while iterating over it using a `foreach` loop.  `unset()` removes elements, causing the index to shift unexpectedly, leading to some elements being skipped.

## Solution
The solution is to use `array_filter()` instead of `unset()` within the `foreach` loop. This approach creates a new array containing only the desired elements without modifying the original array during iteration.