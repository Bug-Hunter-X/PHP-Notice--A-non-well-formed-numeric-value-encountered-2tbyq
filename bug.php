```php
<?php
function my_function($arr) {
  if (empty($arr)) {
    return 0; // Handle empty array
  }

  $sum = 0;
  foreach ($arr as $value) {
    $sum += $value;
  }
  return $sum;
}

$numbers = [1, 2, 3, 4, 5];
echo my_function($numbers); // Output: 15

$emptyArray = [];
echo my_function($emptyArray); // Output: 0

//Example of unexpected behavior
$mixedArray = [1, 2, 'a', 4, 5];
echo my_function($mixedArray); // Output: 12 (PHP Notice: A non well formed numeric value encountered)
?>
```