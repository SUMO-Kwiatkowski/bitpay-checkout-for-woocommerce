<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitbf29e92a4eb299ce8b74cb0d23ab0c24
{
    public static $files = array (
        '7b11c4dc42b3b3023073cb14e519683c' => __DIR__ . '/..' . '/ralouphie/getallheaders/src/getallheaders.php',
        '6e3fae29631ef280660b3cdad06f25a8' => __DIR__ . '/..' . '/symfony/deprecation-contracts/function.php',
        '320cde22f66dd4f5d3fd621d3e88b98f' => __DIR__ . '/..' . '/symfony/polyfill-ctype/bootstrap.php',
        '37a3dc5111fe8f707ab4c132ef1dbc62' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/functions_include.php',
    );

    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Symfony\\Polyfill\\Ctype\\' => 23,
            'Symfony\\Component\\Yaml\\' => 23,
        ),
        'P' => 
        array (
            'Psr\\Http\\Message\\' => 17,
            'Psr\\Http\\Client\\' => 16,
            'PHPCSStandards\\Composer\\Plugin\\Installers\\PHPCodeSniffer\\' => 57,
        ),
        'G' => 
        array (
            'GuzzleHttp\\Psr7\\' => 16,
            'GuzzleHttp\\Promise\\' => 19,
            'GuzzleHttp\\' => 11,
        ),
        'B' => 
        array (
            'BitPaySDK\\' => 10,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Symfony\\Polyfill\\Ctype\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-ctype',
        ),
        'Symfony\\Component\\Yaml\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/yaml',
        ),
        'Psr\\Http\\Message\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/http-factory/src',
            1 => __DIR__ . '/..' . '/psr/http-message/src',
        ),
        'Psr\\Http\\Client\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/http-client/src',
        ),
        'PHPCSStandards\\Composer\\Plugin\\Installers\\PHPCodeSniffer\\' => 
        array (
            0 => __DIR__ . '/..' . '/dealerdirect/phpcodesniffer-composer-installer/src',
        ),
        'GuzzleHttp\\Psr7\\' => 
        array (
            0 => __DIR__ . '/..' . '/guzzlehttp/psr7/src',
        ),
        'GuzzleHttp\\Promise\\' => 
        array (
            0 => __DIR__ . '/..' . '/guzzlehttp/promises/src',
        ),
        'GuzzleHttp\\' => 
        array (
            0 => __DIR__ . '/..' . '/guzzlehttp/guzzle/src',
        ),
        'BitPaySDK\\' => 
        array (
            0 => __DIR__ . '/..' . '/bitpay/sdk/src/BitPaySDK',
        ),
    );

    public static $fallbackDirsPsr4 = array (
        0 => __DIR__ . '/..' . '/bitpay/key-utils/src',
    );

    public static $prefixesPsr0 = array (
        'J' => 
        array (
            'JsonMapper' => 
            array (
                0 => __DIR__ . '/..' . '/netresearch/jsonmapper/src',
            ),
        ),
    );

    public static $classMap = array (
        'BitPayLib\\BitPayCancelOrder' => __DIR__ . '/../..' . '/BitPayLib/class-bitpaycancelorder.php',
        'BitPayLib\\BitPayCart' => __DIR__ . '/../..' . '/BitPayLib/class-bitpaycart.php',
        'BitPayLib\\BitPayCheckoutTransactions' => __DIR__ . '/../..' . '/BitPayLib/class-bitpaycheckouttransactions.php',
        'BitPayLib\\BitPayClientFactory' => __DIR__ . '/../..' . '/BitPayLib/class-bitpayclientfactory.php',
        'BitPayLib\\BitPayInvoiceCreate' => __DIR__ . '/../..' . '/BitPayLib/class-bitpayinvoicecreate.php',
        'BitPayLib\\BitPayIpnProcess' => __DIR__ . '/../..' . '/BitPayLib/class-bitpayipnprocess.php',
        'BitPayLib\\BitPayLogger' => __DIR__ . '/../..' . '/BitPayLib/class-bitpaylogger.php',
        'BitPayLib\\BitPayPages' => __DIR__ . '/../..' . '/BitPayLib/class-bitpaypages.php',
        'BitPayLib\\BitPayPaymentSettings' => __DIR__ . '/../..' . '/BitPayLib/class-bitpaypaymentsettings.php',
        'BitPayLib\\BitPayPluginSetup' => __DIR__ . '/../..' . '/BitPayLib/class-bitpaypluginsetup.php',
        'BitPayLib\\WcGatewayBitpay' => __DIR__ . '/../..' . '/BitPayLib/class-wcgatewaybitpay.php',
        'BitPayLib\\WpDbHelper' => __DIR__ . '/../..' . '/BitPayLib/trait-wpdbhelper.php',
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'PHPCSUtils\\AbstractSniffs\\AbstractArrayDeclarationSniff' => __DIR__ . '/..' . '/phpcsstandards/phpcsutils/PHPCSUtils/AbstractSniffs/AbstractArrayDeclarationSniff.php',
        'PHPCSUtils\\BackCompat\\BCFile' => __DIR__ . '/..' . '/phpcsstandards/phpcsutils/PHPCSUtils/BackCompat/BCFile.php',
        'PHPCSUtils\\BackCompat\\BCTokens' => __DIR__ . '/..' . '/phpcsstandards/phpcsutils/PHPCSUtils/BackCompat/BCTokens.php',
        'PHPCSUtils\\BackCompat\\Helper' => __DIR__ . '/..' . '/phpcsstandards/phpcsutils/PHPCSUtils/BackCompat/Helper.php',
        'PHPCSUtils\\Exceptions\\InvalidTokenArray' => __DIR__ . '/..' . '/phpcsstandards/phpcsutils/PHPCSUtils/Exceptions/InvalidTokenArray.php',
        'PHPCSUtils\\Exceptions\\TestFileNotFound' => __DIR__ . '/..' . '/phpcsstandards/phpcsutils/PHPCSUtils/Exceptions/TestFileNotFound.php',
        'PHPCSUtils\\Exceptions\\TestMarkerNotFound' => __DIR__ . '/..' . '/phpcsstandards/phpcsutils/PHPCSUtils/Exceptions/TestMarkerNotFound.php',
        'PHPCSUtils\\Exceptions\\TestTargetNotFound' => __DIR__ . '/..' . '/phpcsstandards/phpcsutils/PHPCSUtils/Exceptions/TestTargetNotFound.php',
        'PHPCSUtils\\Fixers\\SpacesFixer' => __DIR__ . '/..' . '/phpcsstandards/phpcsutils/PHPCSUtils/Fixers/SpacesFixer.php',
        'PHPCSUtils\\Internal\\Cache' => __DIR__ . '/..' . '/phpcsstandards/phpcsutils/PHPCSUtils/Internal/Cache.php',
        'PHPCSUtils\\Internal\\IsShortArrayOrList' => __DIR__ . '/..' . '/phpcsstandards/phpcsutils/PHPCSUtils/Internal/IsShortArrayOrList.php',
        'PHPCSUtils\\Internal\\IsShortArrayOrListWithCache' => __DIR__ . '/..' . '/phpcsstandards/phpcsutils/PHPCSUtils/Internal/IsShortArrayOrListWithCache.php',
        'PHPCSUtils\\Internal\\NoFileCache' => __DIR__ . '/..' . '/phpcsstandards/phpcsutils/PHPCSUtils/Internal/NoFileCache.php',
        'PHPCSUtils\\Internal\\StableCollections' => __DIR__ . '/..' . '/phpcsstandards/phpcsutils/PHPCSUtils/Internal/StableCollections.php',
        'PHPCSUtils\\TestUtils\\UtilityMethodTestCase' => __DIR__ . '/..' . '/phpcsstandards/phpcsutils/PHPCSUtils/TestUtils/UtilityMethodTestCase.php',
        'PHPCSUtils\\Tokens\\Collections' => __DIR__ . '/..' . '/phpcsstandards/phpcsutils/PHPCSUtils/Tokens/Collections.php',
        'PHPCSUtils\\Tokens\\TokenHelper' => __DIR__ . '/..' . '/phpcsstandards/phpcsutils/PHPCSUtils/Tokens/TokenHelper.php',
        'PHPCSUtils\\Utils\\Arrays' => __DIR__ . '/..' . '/phpcsstandards/phpcsutils/PHPCSUtils/Utils/Arrays.php',
        'PHPCSUtils\\Utils\\Conditions' => __DIR__ . '/..' . '/phpcsstandards/phpcsutils/PHPCSUtils/Utils/Conditions.php',
        'PHPCSUtils\\Utils\\Context' => __DIR__ . '/..' . '/phpcsstandards/phpcsutils/PHPCSUtils/Utils/Context.php',
        'PHPCSUtils\\Utils\\ControlStructures' => __DIR__ . '/..' . '/phpcsstandards/phpcsutils/PHPCSUtils/Utils/ControlStructures.php',
        'PHPCSUtils\\Utils\\FunctionDeclarations' => __DIR__ . '/..' . '/phpcsstandards/phpcsutils/PHPCSUtils/Utils/FunctionDeclarations.php',
        'PHPCSUtils\\Utils\\GetTokensAsString' => __DIR__ . '/..' . '/phpcsstandards/phpcsutils/PHPCSUtils/Utils/GetTokensAsString.php',
        'PHPCSUtils\\Utils\\Lists' => __DIR__ . '/..' . '/phpcsstandards/phpcsutils/PHPCSUtils/Utils/Lists.php',
        'PHPCSUtils\\Utils\\MessageHelper' => __DIR__ . '/..' . '/phpcsstandards/phpcsutils/PHPCSUtils/Utils/MessageHelper.php',
        'PHPCSUtils\\Utils\\Namespaces' => __DIR__ . '/..' . '/phpcsstandards/phpcsutils/PHPCSUtils/Utils/Namespaces.php',
        'PHPCSUtils\\Utils\\NamingConventions' => __DIR__ . '/..' . '/phpcsstandards/phpcsutils/PHPCSUtils/Utils/NamingConventions.php',
        'PHPCSUtils\\Utils\\Numbers' => __DIR__ . '/..' . '/phpcsstandards/phpcsutils/PHPCSUtils/Utils/Numbers.php',
        'PHPCSUtils\\Utils\\ObjectDeclarations' => __DIR__ . '/..' . '/phpcsstandards/phpcsutils/PHPCSUtils/Utils/ObjectDeclarations.php',
        'PHPCSUtils\\Utils\\Operators' => __DIR__ . '/..' . '/phpcsstandards/phpcsutils/PHPCSUtils/Utils/Operators.php',
        'PHPCSUtils\\Utils\\Orthography' => __DIR__ . '/..' . '/phpcsstandards/phpcsutils/PHPCSUtils/Utils/Orthography.php',
        'PHPCSUtils\\Utils\\Parentheses' => __DIR__ . '/..' . '/phpcsstandards/phpcsutils/PHPCSUtils/Utils/Parentheses.php',
        'PHPCSUtils\\Utils\\PassedParameters' => __DIR__ . '/..' . '/phpcsstandards/phpcsutils/PHPCSUtils/Utils/PassedParameters.php',
        'PHPCSUtils\\Utils\\Scopes' => __DIR__ . '/..' . '/phpcsstandards/phpcsutils/PHPCSUtils/Utils/Scopes.php',
        'PHPCSUtils\\Utils\\TextStrings' => __DIR__ . '/..' . '/phpcsstandards/phpcsutils/PHPCSUtils/Utils/TextStrings.php',
        'PHPCSUtils\\Utils\\UseStatements' => __DIR__ . '/..' . '/phpcsstandards/phpcsutils/PHPCSUtils/Utils/UseStatements.php',
        'PHPCSUtils\\Utils\\Variables' => __DIR__ . '/..' . '/phpcsstandards/phpcsutils/PHPCSUtils/Utils/Variables.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitbf29e92a4eb299ce8b74cb0d23ab0c24::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitbf29e92a4eb299ce8b74cb0d23ab0c24::$prefixDirsPsr4;
            $loader->fallbackDirsPsr4 = ComposerStaticInitbf29e92a4eb299ce8b74cb0d23ab0c24::$fallbackDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInitbf29e92a4eb299ce8b74cb0d23ab0c24::$prefixesPsr0;
            $loader->classMap = ComposerStaticInitbf29e92a4eb299ce8b74cb0d23ab0c24::$classMap;

        }, null, ClassLoader::class);
    }
}