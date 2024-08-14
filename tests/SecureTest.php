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
use PHPUnit\Framework\Attributes\DataProvider;
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

    /**
     * Result of Test
     */
    private static string $folderSupportResult = '';

    protected function setUp(): void
    {
        self::$folderSupport       = './tests/_support/';
        self::$folderSupportResult = self::$folderSupport . 'result/';

        if (is_file(self::$folderSupportResult . 'result.xlsx')) {
            unlink(self::$folderSupportResult . 'result.xlsx');
        }
        if (is_file(self::$folderSupportResult . 'result.xlsm')) {
            unlink(self::$folderSupportResult . 'result.xlsm');
        }
        if (is_file(self::$folderSupportResult . 'result.xlsb')) {
            unlink(self::$folderSupportResult . 'result.xlsb');
        }
        if (is_file(self::$folderSupportResult . 'result.xls')) {
            unlink(self::$folderSupportResult . 'result.xls');
        }
        if (is_file(self::$folderSupportResult . 'result.csv')) {
            unlink(self::$folderSupportResult . 'result.csv');
        }
    }

    public static function dataProviderExcel(): iterable
    {
        yield from [
            'Excel 2024' => [
                'checkFiles'    => 'excel2024.xlsx',
                'expectedFiles' => 'result.xlsx',
            ],
            'Excel 2024 - Strict' => [
                'checkFiles'    => 'excel2024strict.xlsx',
                'expectedFiles' => 'result.xlsx',
            ],
            'Excel Macro' => [
                'checkFiles'    => 'excelmacro.xlsm',
                'expectedFiles' => 'result.xlsm',
            ],
            'Excel Binary' => [
                'checkFiles'    => 'excelbinary.xlsb',
                'expectedFiles' => 'result.xlsb',
            ],
            'Excel 97-2003' => [
                'checkFiles'    => 'excel97.xls',
                'expectedFiles' => 'result.xls',
            ],
            'Excel 95' => [
                'checkFiles'    => 'excel95.xls',
                'expectedFiles' => 'result.xls',
            ],
            'CSV UTF-8' => [
                'checkFiles'    => 'csvutf8.csv',
                'expectedFiles' => 'result.csv',
            ],
            'CSV Unknown' => [
                'checkFiles'    => 'csvunknown.csv',
                'expectedFiles' => 'result.csv',
            ],
        ];
    }

    #[DataProvider('dataProviderExcel')]
    public static function testEncryptor(string $checkFiles = '', string $expectedFiles = ''): void
    {
        (new Secure())->setFile(self::$folderSupport . $checkFiles)->setPassword('111')->output(self::$folderSupportResult . $expectedFiles);

        self::assertFileExists(self::$folderSupportResult . $expectedFiles);
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
