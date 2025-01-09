```php
function my_function($arr) {
  foreach ($arr as $key => $value) {
    if ($value === 0) {
      unset($arr[$key]);
    }
  }
  return $arr;
}

$arr = [1, 0, 2, 0, 3];
$result = my_function($arr);
print_r($result); // Output: Array ( [0] => 1 [2] => 2 [4] => 3 ) 

//Unexpected behavior when dealing with array keys that are not sequential integers
$arr2 = ['a' => 1, 'b' => 0, 'c' => 2];
$result2 = my_function($arr2);
print_r($result2); // Output: Array ( [a] => 1 [c] => 2 )

//The issue arises because unset() modifies the array in place.  When processing associative arrays, this leads to unexpected key skipping.
```