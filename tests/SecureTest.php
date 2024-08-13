<?php

/**
 * This file is part of PHPDevsr/PHPSpreadsheet-Secure.
 *
 * (c) 2024 Denny Septian Panggabean <xamidimura@gmail.com>
 *
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 */

namespace Tests;

use PHPDevsr\Spreadsheet\Secure;
use PHPUnit\Framework\TestCase;

/**
 * @internal
 */
final class SecureTest extends TestCase
{
    /**
     * Folder Support
     */
    private static string $folderSupport = '';

    protected function setUp(): void
    {
        self::$folderSupport = './tests/_support/';

        if (file_exists(self::$folderSupport . 'bb.xlsx')) {
            unlink(self::$folderSupport . 'bb.xlsx');
        }
    }

    public static function testEncryptor(): void
    {
        (new Secure())->setFile(self::$folderSupport . 'Book1.xlsx')->setPassword('111')->output(self::$folderSupport . 'bb.xlsx');

        self::assertFileExists(self::$folderSupport . 'bb.xlsx');
    }

    public static function testEncryptorWithBinaryData(): void
    {
        $data = self::$folderSupport . 'Book1.xlsx';
        $fp   = fopen($data, 'rb');
        self::assertNotFalse($fp);

        $fileSize = filesize($data);
        self::assertNotFalse($fileSize);

        $binaryData = fread($fp, $fileSize);
        self::assertNotFalse($binaryData);

        fclose($fp);

        $str = (new Secure(true))->setFile($binaryData)->setPassword('111')->output();

        self::assertSame(12288, strlen($str));
    }
}
