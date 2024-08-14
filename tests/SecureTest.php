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

use Generator;
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
        parent::setUp();

        self::$folderSupport       = './tests/_support/';
        self::$folderSupportResult = self::$folderSupport . 'result/';
    }

    /**
     * Provider Excel
     *
     * @return Generator<string, array<string, string>>
     */
    public static function provideExcel()
    {
        $PHPID = PHP_VERSION_ID;

        yield from [
            'Excel 2024' => [
                'checkFiles'    => 'excel2024.xlsx',
                'expectedFiles' => 'excel2024_result' . $PHPID . '.xlsx',
            ],
            'Excel 2024 - Strict' => [
                'checkFiles'    => 'excel2024strict.xlsx',
                'expectedFiles' => 'excel2024strict_result' . $PHPID . '.xlsx',
            ],
            'Excel Macro' => [
                'checkFiles'    => 'excelmacro.xlsm',
                'expectedFiles' => 'excelmacro_result' . $PHPID . '.xlsm',
            ],
            'Excel Binary' => [
                'checkFiles'    => 'excelbinary.xlsb',
                'expectedFiles' => 'excelbinary_result' . $PHPID . '.xlsb',
            ],
            'Excel 97-2003' => [
                'checkFiles'    => 'excel97.xls',
                'expectedFiles' => 'excel97_result' . $PHPID . '.xls',
            ],
            'Excel 95' => [
                'checkFiles'    => 'excel95.xls',
                'expectedFiles' => 'excel95_result' . $PHPID . '.xls',
            ],
            'CSV UTF-8' => [
                'checkFiles'    => 'csvutf8.csv',
                'expectedFiles' => 'csvutf8_result' . $PHPID . '.csv',
            ],
            'CSV Unknown' => [
                'checkFiles'    => 'csvunknown.csv',
                'expectedFiles' => 'csvunknown_result' . $PHPID . '.csv',
            ],
        ];
    }

    #[DataProvider('provideExcel')]
    public static function testEncryptor(string $checkFiles = '', string $expectedFiles = ''): void
    {
        (new Secure())->setFile(self::$folderSupport . $checkFiles)->setPassword('111')->output(self::$folderSupportResult . $expectedFiles);

        self::assertFileExists(self::$folderSupportResult . $expectedFiles);

        if (is_file(self::$folderSupportResult . $expectedFiles)) {
            unlink(self::$folderSupportResult . $expectedFiles);
        }
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
