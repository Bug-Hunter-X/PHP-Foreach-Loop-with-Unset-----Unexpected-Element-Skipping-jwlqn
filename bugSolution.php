function foo(array $arr) {
  return array_filter($arr, function ($value) {
    return $value !== 'apple';
  });
}

$fruits = ['apple', 'banana', 'apple', 'orange'];
$result = foo($fruits);
print_r($result); // Output: Array ( [1] => banana [3] => orange )