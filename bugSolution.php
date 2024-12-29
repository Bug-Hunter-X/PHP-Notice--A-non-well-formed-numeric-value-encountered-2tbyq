```php
<?php
function my_function($arr) {
  if (empty($arr)) {
    return 0; // Handle empty array
  }

  $sum = 0;
  foreach ($arr as $value) {
    if (is_numeric($value)) {
      $sum += $value;
    } else {
      //Handle non-numeric values appropriately.  
      //Here, we're ignoring them, but you might choose to throw an exception, use 0, etc.
    }
  }
  return $sum;
}

$numbers = [1, 2, 3, 4, 5];
echo my_function($numbers); // Output: 15

$emptyArray = [];
echo my_function($emptyArray); // Output: 0

//Example of improved handling
$mixedArray = [1, 2, 'a', 4, 5];
echo my_function($mixedArray); // Output: 12 (No error)
?>
```