function foo(array $arr) {
  foreach ($arr as $key => $value) {
    if ($value === 'apple') {
      unset($arr[$key]);
    }
  }
  return $arr;
}

$fruits = ['apple', 'banana', 'apple', 'orange'];
$result = foo($fruits);
print_r($result); // Output: Array ( [1] => banana [3] => orange )

//The issue is that unset() modifies the array during iteration, leading to unexpected skipping of elements.
//Solution is to iterate over a copy or use a different approach like array_filter