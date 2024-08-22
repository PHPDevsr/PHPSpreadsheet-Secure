<?php declare(strict_types = 1);

$ignoreErrors = [];
$ignoreErrors[] = [
	// identifier: foreach.nonIterable
	'message' => '#^Argument of an invalid type array\\|Countable supplied for foreach, only iterables are supported\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/src/Secure.php',
];
$ignoreErrors[] = [
	// identifier: offsetAccess.nonOffsetAccessible
	'message' => '#^Cannot access offset \'name\' on mixed\\.$#',
	'count' => 3,
	'path' => __DIR__ . '/src/Secure.php',
];
$ignoreErrors[] = [
	// identifier: missingType.return
	'message' => '#^Method PHPDevsr\\\\Spreadsheet\\\\Secure\\:\\:_convertPasswordToKey\\(\\) has no return type specified\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/src/Secure.php',
];
$ignoreErrors[] = [
	// identifier: missingType.parameter
	'message' => '#^Method PHPDevsr\\\\Spreadsheet\\\\Secure\\:\\:_convertPasswordToKey\\(\\) has parameter \\$blockKey with no type specified\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/src/Secure.php',
];
$ignoreErrors[] = [
	// identifier: missingType.parameter
	'message' => '#^Method PHPDevsr\\\\Spreadsheet\\\\Secure\\:\\:_convertPasswordToKey\\(\\) has parameter \\$hashAlgorithm with no type specified\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/src/Secure.php',
];
$ignoreErrors[] = [
	// identifier: missingType.parameter
	'message' => '#^Method PHPDevsr\\\\Spreadsheet\\\\Secure\\:\\:_convertPasswordToKey\\(\\) has parameter \\$keyBits with no type specified\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/src/Secure.php',
];
$ignoreErrors[] = [
	// identifier: missingType.parameter
	'message' => '#^Method PHPDevsr\\\\Spreadsheet\\\\Secure\\:\\:_convertPasswordToKey\\(\\) has parameter \\$password with no type specified\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/src/Secure.php',
];
$ignoreErrors[] = [
	// identifier: missingType.parameter
	'message' => '#^Method PHPDevsr\\\\Spreadsheet\\\\Secure\\:\\:_convertPasswordToKey\\(\\) has parameter \\$saltValue with no type specified\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/src/Secure.php',
];
$ignoreErrors[] = [
	// identifier: missingType.parameter
	'message' => '#^Method PHPDevsr\\\\Spreadsheet\\\\Secure\\:\\:_convertPasswordToKey\\(\\) has parameter \\$spinCount with no type specified\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/src/Secure.php',
];
$ignoreErrors[] = [
	// identifier: missingType.return
	'message' => '#^Method PHPDevsr\\\\Spreadsheet\\\\Secure\\:\\:_createIV\\(\\) has no return type specified\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/src/Secure.php',
];
$ignoreErrors[] = [
	// identifier: missingType.parameter
	'message' => '#^Method PHPDevsr\\\\Spreadsheet\\\\Secure\\:\\:_createIV\\(\\) has parameter \\$blockKey with no type specified\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/src/Secure.php',
];
$ignoreErrors[] = [
	// identifier: missingType.parameter
	'message' => '#^Method PHPDevsr\\\\Spreadsheet\\\\Secure\\:\\:_createIV\\(\\) has parameter \\$blockSize with no type specified\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/src/Secure.php',
];
$ignoreErrors[] = [
	// identifier: missingType.parameter
	'message' => '#^Method PHPDevsr\\\\Spreadsheet\\\\Secure\\:\\:_createIV\\(\\) has parameter \\$hashAlgorithm with no type specified\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/src/Secure.php',
];
$ignoreErrors[] = [
	// identifier: missingType.parameter
	'message' => '#^Method PHPDevsr\\\\Spreadsheet\\\\Secure\\:\\:_createIV\\(\\) has parameter \\$saltValue with no type specified\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/src/Secure.php',
];
$ignoreErrors[] = [
	// identifier: missingType.return
	'message' => '#^Method PHPDevsr\\\\Spreadsheet\\\\Secure\\:\\:_createUInt32LEBuffer\\(\\) has no return type specified\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/src/Secure.php',
];
$ignoreErrors[] = [
	// identifier: missingType.parameter
	'message' => '#^Method PHPDevsr\\\\Spreadsheet\\\\Secure\\:\\:_createUInt32LEBuffer\\(\\) has parameter \\$bufferSize with no type specified\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/src/Secure.php',
];
$ignoreErrors[] = [
	// identifier: missingType.parameter
	'message' => '#^Method PHPDevsr\\\\Spreadsheet\\\\Secure\\:\\:_createUInt32LEBuffer\\(\\) has parameter \\$value with no type specified\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/src/Secure.php',
];
$ignoreErrors[] = [
	// identifier: missingType.return
	'message' => '#^Method PHPDevsr\\\\Spreadsheet\\\\Secure\\:\\:_crypt\\(\\) has no return type specified\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/src/Secure.php',
];
$ignoreErrors[] = [
	// identifier: missingType.parameter
	'message' => '#^Method PHPDevsr\\\\Spreadsheet\\\\Secure\\:\\:_crypt\\(\\) has parameter \\$cipherAlgorithm with no type specified\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/src/Secure.php',
];
$ignoreErrors[] = [
	// identifier: missingType.parameter
	'message' => '#^Method PHPDevsr\\\\Spreadsheet\\\\Secure\\:\\:_crypt\\(\\) has parameter \\$cipherChaining with no type specified\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/src/Secure.php',
];
$ignoreErrors[] = [
	// identifier: missingType.parameter
	'message' => '#^Method PHPDevsr\\\\Spreadsheet\\\\Secure\\:\\:_crypt\\(\\) has parameter \\$encrypt with no type specified\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/src/Secure.php',
];
$ignoreErrors[] = [
	// identifier: missingType.parameter
	'message' => '#^Method PHPDevsr\\\\Spreadsheet\\\\Secure\\:\\:_crypt\\(\\) has parameter \\$input with no type specified\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/src/Secure.php',
];
$ignoreErrors[] = [
	// identifier: missingType.parameter
	'message' => '#^Method PHPDevsr\\\\Spreadsheet\\\\Secure\\:\\:_crypt\\(\\) has parameter \\$iv with no type specified\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/src/Secure.php',
];
$ignoreErrors[] = [
	// identifier: missingType.parameter
	'message' => '#^Method PHPDevsr\\\\Spreadsheet\\\\Secure\\:\\:_crypt\\(\\) has parameter \\$key with no type specified\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/src/Secure.php',
];
$ignoreErrors[] = [
	// identifier: missingType.return
	'message' => '#^Method PHPDevsr\\\\Spreadsheet\\\\Secure\\:\\:_cryptPackage\\(\\) has no return type specified\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/src/Secure.php',
];
$ignoreErrors[] = [
	// identifier: missingType.parameter
	'message' => '#^Method PHPDevsr\\\\Spreadsheet\\\\Secure\\:\\:_cryptPackage\\(\\) has parameter \\$blockSize with no type specified\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/src/Secure.php',
];
$ignoreErrors[] = [
	// identifier: missingType.parameter
	'message' => '#^Method PHPDevsr\\\\Spreadsheet\\\\Secure\\:\\:_cryptPackage\\(\\) has parameter \\$cipherAlgorithm with no type specified\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/src/Secure.php',
];
$ignoreErrors[] = [
	// identifier: missingType.parameter
	'message' => '#^Method PHPDevsr\\\\Spreadsheet\\\\Secure\\:\\:_cryptPackage\\(\\) has parameter \\$cipherChaining with no type specified\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/src/Secure.php',
];
$ignoreErrors[] = [
	// identifier: missingType.parameter
	'message' => '#^Method PHPDevsr\\\\Spreadsheet\\\\Secure\\:\\:_cryptPackage\\(\\) has parameter \\$encrypt with no type specified\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/src/Secure.php',
];
$ignoreErrors[] = [
	// identifier: missingType.parameter
	'message' => '#^Method PHPDevsr\\\\Spreadsheet\\\\Secure\\:\\:_cryptPackage\\(\\) has parameter \\$hashAlgorithm with no type specified\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/src/Secure.php',
];
$ignoreErrors[] = [
	// identifier: missingType.parameter
	'message' => '#^Method PHPDevsr\\\\Spreadsheet\\\\Secure\\:\\:_cryptPackage\\(\\) has parameter \\$input with no type specified\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/src/Secure.php',
];
$ignoreErrors[] = [
	// identifier: missingType.parameter
	'message' => '#^Method PHPDevsr\\\\Spreadsheet\\\\Secure\\:\\:_cryptPackage\\(\\) has parameter \\$key with no type specified\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/src/Secure.php',
];
$ignoreErrors[] = [
	// identifier: missingType.parameter
	'message' => '#^Method PHPDevsr\\\\Spreadsheet\\\\Secure\\:\\:_cryptPackage\\(\\) has parameter \\$saltValue with no type specified\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/src/Secure.php',
];
$ignoreErrors[] = [
	// identifier: missingType.return
	'message' => '#^Method PHPDevsr\\\\Spreadsheet\\\\Secure\\:\\:_hash\\(\\) has no return type specified\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/src/Secure.php',
];
$ignoreErrors[] = [
	// identifier: missingType.parameter
	'message' => '#^Method PHPDevsr\\\\Spreadsheet\\\\Secure\\:\\:_hash\\(\\) has parameter \\$algorithm with no type specified\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/src/Secure.php',
];
$ignoreErrors[] = [
	// identifier: missingType.parameter
	'message' => '#^Method PHPDevsr\\\\Spreadsheet\\\\Secure\\:\\:_hash\\(\\) has parameter \\$buffers with no type specified\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/src/Secure.php',
];
$ignoreErrors[] = [
	// identifier: return.type
	'message' => '#^Method PHPDevsr\\\\Spreadsheet\\\\Secure\\:\\:output\\(\\) should return string but returns string\\|false\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/src/Secure.php',
];
$ignoreErrors[] = [
	// identifier: argument.unpackNonIterable
	'message' => '#^Only iterables can be unpacked, array\\|false given in argument \\#2\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/src/Secure.php',
];
$ignoreErrors[] = [
	// identifier: argument.type
	'message' => '#^Parameter \\#1 \\$array of function array_pad expects array, mixed given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/src/Secure.php',
];
$ignoreErrors[] = [
	// identifier: argument.type
	'message' => '#^Parameter \\#1 \\$array of function array_unshift expects array, array\\|false given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/src/Secure.php',
];
$ignoreErrors[] = [
	// identifier: argument.type
	'message' => '#^Parameter \\#1 \\$array of function array_values expects array, array\\|false given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/src/Secure.php',
];
$ignoreErrors[] = [
	// identifier: argument.type
	'message' => '#^Parameter \\#1 \\$data of method PHPDevsr\\\\Spreadsheet\\\\Secure\\:\\:build\\(\\) expects array\\<string, mixed\\>, mixed given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/src/Secure.php',
];
$ignoreErrors[] = [
	// identifier: argument.type
	'message' => '#^Parameter \\#1 \\$filename of function file_get_contents expects string, string\\|false\\|null given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/src/Secure.php',
];
$ignoreErrors[] = [
	// identifier: argument.type
	'message' => '#^Parameter \\#1 \\$filename of method OLE_PPS_Root\\:\\:save\\(\\) expects string, string\\|false\\|null given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/src/Secure.php',
];
$ignoreErrors[] = [
	// identifier: argument.type
	'message' => '#^Parameter \\#1 \\$qualifiedName of method SimpleXMLElement\\:\\:addChild\\(\\) expects string, mixed given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/src/Secure.php',
];
$ignoreErrors[] = [
	// identifier: argument.type
	'message' => '#^Parameter \\#1 \\$stream of function fclose expects resource, resource\\|false given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/src/Secure.php',
];
$ignoreErrors[] = [
	// identifier: argument.type
	'message' => '#^Parameter \\#1 \\$stream of function feof expects resource, resource\\|false given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/src/Secure.php',
];
$ignoreErrors[] = [
	// identifier: argument.type
	'message' => '#^Parameter \\#1 \\$stream of function fread expects resource, resource\\|false given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/src/Secure.php',
];
$ignoreErrors[] = [
	// identifier: argument.type
	'message' => '#^Parameter \\#1 \\$string of function bin2hex expects string, array\\<int, string\\>\\|string\\|false given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/src/Secure.php',
];
$ignoreErrors[] = [
	// identifier: argument.type
	'message' => '#^Parameter \\#1 \\$value of function count expects array\\|Countable, array\\|false given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/src/Secure.php',
];
$ignoreErrors[] = [
	// identifier: argument.type
	'message' => '#^Parameter \\#1 \\$value of function count expects array\\|Countable, mixed given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/src/Secure.php',
];
$ignoreErrors[] = [
	// identifier: argument.type
	'message' => '#^Parameter \\#2 \\$string of function explode expects string, mixed given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/src/Secure.php',
];
$ignoreErrors[] = [
	// identifier: argument.type
	'message' => '#^Parameter \\#2 \\$string of function unpack expects string, string\\|false given\\.$#',
	'count' => 3,
	'path' => __DIR__ . '/src/Secure.php',
];
$ignoreErrors[] = [
	// identifier: argument.type
	'message' => '#^Parameter \\#2 \\$value of method SimpleXMLElement\\:\\:addAttribute\\(\\) expects string, mixed given\\.$#',
	'count' => 2,
	'path' => __DIR__ . '/src/Secure.php',
];
$ignoreErrors[] = [
	// identifier: argument.type
	'message' => '#^Parameter \\#2 \\$length of function fread expects int\\<1, max\\>, int\\<0, max\\> given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/tests/SecureTest.php',
];

return ['parameters' => ['ignoreErrors' => $ignoreErrors]];
