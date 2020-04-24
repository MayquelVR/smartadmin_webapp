# Utilities

SmartAdmin PHP includes various utilities that are read-to-use in your everyday workflow. These utilities does not belong to any framework and they are straightforward.

## Write easy

Below are the common functions that SmartAdmin PHP uses.

### `plog`

Stands for **print log**. This handy function can almost "print" everything, well formatted too. Whenever you need to debug something or just output a simple array, this function is your friend.

`plog(string $msg [, bool $newline = true, array $options = [], bool $return = false]);`

**Example**
```php
$my_data = [
	'foo' => 'bar',
	'test' => 'data'
];

plog($my_data);
```

**Output**
```
Array (
    [foo] => bar
    [test] => data
)
```

### `get`

A simple yet powerful function that gets a value, of everything! This function will save you tons of time validating data by using something like `isset`.
`get(string $field [, mixed $data = $_GET, mixed $default = null, array $possible_values = []])`

**Example**
```php
$data = [
	'key' => 1,
	'key_2' => 2
];

// returns $default, which is null
$value = get('key', $data); // returns 1
```

If `$data` is not provided, it uses the global `$_GET` variable as data source.

### `dt`

A simple function that generates `Date` strings. Straightforward and easy to write.
`dt(mixed $date [, string $format = 'Y-m-d H:i:s'])`

**Example**
```php
dt('now', 'm/d/Y'); // returns 07/01/2019
```

## Other utils

Checkout `lib/func.php` to get the list of utilities used by SmartAdmin PHP.

## Credits

Some of these functions are derived from [lodev09/php-utils](https://github.com/lodev09/php-utils) package created by [@lodev09](https://twitter.com/lodev09).