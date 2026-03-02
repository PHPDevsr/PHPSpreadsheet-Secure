<?php declare(strict_types = 1);

$ignoreErrors = [];
$ignoreErrors[] = [
	'message' => '#^Method PHPDevsr\\\\Spreadsheet\\\\Secure\\:\\:_convertPasswordToKey\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/src/Secure.php',
];
$ignoreErrors[] = [
	'message' => '#^Method PHPDevsr\\\\Spreadsheet\\\\Secure\\:\\:_convertPasswordToKey\\(\\) has parameter \\$blockKey with no type specified\\.$#',
	'identifier' => 'missingType.parameter',
	'count' => 1,
	'path' => __DIR__ . '/src/Secure.php',
];
$ignoreErrors[] = [
	'message' => '#^Method PHPDevsr\\\\Spreadsheet\\\\Secure\\:\\:_convertPasswordToKey\\(\\) has parameter \\$saltValue with no type specified\\.$#',
	'identifier' => 'missingType.parameter',
	'count' => 1,
	'path' => __DIR__ . '/src/Secure.php',
];
$ignoreErrors[] = [
	'message' => '#^Method PHPDevsr\\\\Spreadsheet\\\\Secure\\:\\:_createIV\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/src/Secure.php',
];
$ignoreErrors[] = [
	'message' => '#^Method PHPDevsr\\\\Spreadsheet\\\\Secure\\:\\:_createUInt32LEBuffer\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/src/Secure.php',
];
$ignoreErrors[] = [
	'message' => '#^Method PHPDevsr\\\\Spreadsheet\\\\Secure\\:\\:_crypt\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/src/Secure.php',
];
$ignoreErrors[] = [
	'message' => '#^Method PHPDevsr\\\\Spreadsheet\\\\Secure\\:\\:_crypt\\(\\) has parameter \\$key with no value type specified in iterable type array\\.$#',
	'identifier' => 'missingType.iterableValue',
	'count' => 1,
	'path' => __DIR__ . '/src/Secure.php',
];
$ignoreErrors[] = [
	'message' => '#^Method PHPDevsr\\\\Spreadsheet\\\\Secure\\:\\:_cryptPackage\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/src/Secure.php',
];
$ignoreErrors[] = [
	'message' => '#^Method PHPDevsr\\\\Spreadsheet\\\\Secure\\:\\:_hash\\(\\) has parameter \\$buffers with no type specified\\.$#',
	'identifier' => 'missingType.parameter',
	'count' => 1,
	'path' => __DIR__ . '/src/Secure.php',
];
$ignoreErrors[] = [
	'message' => '#^Offset \'name\' might not exist on array\\<string, string\\>\\|string\\.$#',
	'identifier' => 'offsetAccess.notFound',
	'count' => 3,
	'path' => __DIR__ . '/src/Secure.php',
];
$ignoreErrors[] = [
	'message' => '#^Only iterables can be unpacked, array\\|false given in argument \\#2\\.$#',
	'identifier' => 'argument.unpackNonIterable',
	'count' => 1,
	'path' => __DIR__ . '/src/Secure.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$array of function array_pad expects array, mixed given\\.$#',
	'identifier' => 'argument.type',
	'count' => 1,
	'path' => __DIR__ . '/src/Secure.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$encryptionInfo of method PHPDevsr\\\\Spreadsheet\\\\Secure\\:\\:_buildEncryptionInfo\\(\\) expects array\\<string, array\\<string, array\\<string, int\\|string\\>\\>\\>, array\\<string, array\\<string, mixed\\>\\> given\\.$#',
	'identifier' => 'argument.type',
	'count' => 1,
	'path' => __DIR__ . '/src/Secure.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$stream of function fclose expects resource, resource\\|false given\\.$#',
	'identifier' => 'argument.type',
	'count' => 1,
	'path' => __DIR__ . '/src/Secure.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$stream of function feof expects resource, resource\\|false given\\.$#',
	'identifier' => 'argument.type',
	'count' => 1,
	'path' => __DIR__ . '/src/Secure.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$stream of function fread expects resource, resource\\|false given\\.$#',
	'identifier' => 'argument.type',
	'count' => 1,
	'path' => __DIR__ . '/src/Secure.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$value of function count expects array\\|Countable, mixed given\\.$#',
	'identifier' => 'argument.type',
	'count' => 1,
	'path' => __DIR__ . '/src/Secure.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#2 \\$data of method PHPDevsr\\\\Spreadsheet\\\\Secure\\:\\:build\\(\\) expects array\\<string, array\\<string, array\\<string, string\\>\\|string\\>\\|int\\|string\\>, array\\<string, mixed\\> given\\.$#',
	'identifier' => 'argument.type',
	'count' => 1,
	'path' => __DIR__ . '/src/Secure.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#2 \\$data of method PHPDevsr\\\\Spreadsheet\\\\Secure\\:\\:build\\(\\) expects array\\<string, array\\<string, array\\<string, string\\>\\|string\\>\\|int\\|string\\>, array\\<string, string\\>\\|string given\\.$#',
	'identifier' => 'argument.type',
	'count' => 1,
	'path' => __DIR__ . '/src/Secure.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#2 \\$value of method SimpleXMLElement\\:\\:addAttribute\\(\\) expects string, array\\<string, string\\>\\|string given\\.$#',
	'identifier' => 'argument.type',
	'count' => 2,
	'path' => __DIR__ . '/src/Secure.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#6 \\$input of method PHPDevsr\\\\Spreadsheet\\\\Secure\\:\\:_crypt\\(\\) expects array\\<int\\|string, int\\|string\\>, mixed given\\.$#',
	'identifier' => 'argument.type',
	'count' => 1,
	'path' => __DIR__ . '/src/Secure.php',
];
$ignoreErrors[] = [
	'message' => '#^Strict comparison using \\=\\=\\= between \'AES\' and \'AES\' will always evaluate to true\\.$#',
	'identifier' => 'identical.alwaysTrue',
	'count' => 1,
	'path' => __DIR__ . '/src/Secure.php',
];
$ignoreErrors[] = [
	'message' => '#^Strict comparison using \\=\\=\\= between \'SHA512\' and \'SHA512\' will always evaluate to true\\.$#',
	'identifier' => 'identical.alwaysTrue',
	'count' => 1,
	'path' => __DIR__ . '/src/Secure.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#2 \\$length of function fread expects int\\<1, max\\>, int\\<0, max\\> given\\.$#',
	'identifier' => 'argument.type',
	'count' => 2,
	'path' => __DIR__ . '/tests/SecureTest.php',
];

return ['parameters' => ['ignoreErrors' => $ignoreErrors]];
