<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitb86ec637313980c3ab39e5d77f4b945d
{
    public static $files = array (
        '38fbb71d514eee25044aa9d94851ee76' => __DIR__ . '/..' . '/wp-phpunit/wp-phpunit/__loaded.php',
    );

    public static $prefixLengthsPsr4 = array (
        'W' => 
        array (
            'WCPOS\\WooCommercePOS\\' => 21,
        ),
        'V' => 
        array (
            'VariableAnalysis\\' => 17,
        ),
        'F' => 
        array (
            'Firebase\\JWT\\' => 13,
        ),
        'D' => 
        array (
            'Dealerdirect\\Composer\\Plugin\\Installers\\PHPCodeSniffer\\' => 55,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'WCPOS\\WooCommercePOS\\' => 
        array (
            0 => __DIR__ . '/../..' . '/includes',
        ),
        'VariableAnalysis\\' => 
        array (
            0 => __DIR__ . '/..' . '/sirbrillig/phpcs-variable-analysis/VariableAnalysis',
        ),
        'Firebase\\JWT\\' => 
        array (
            0 => __DIR__ . '/..' . '/firebase/php-jwt/src',
        ),
        'Dealerdirect\\Composer\\Plugin\\Installers\\PHPCodeSniffer\\' => 
        array (
            0 => __DIR__ . '/..' . '/dealerdirect/phpcodesniffer-composer-installer/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'Dealerdirect\\Composer\\Plugin\\Installers\\PHPCodeSniffer\\Plugin' => __DIR__ . '/..' . '/dealerdirect/phpcodesniffer-composer-installer/src/Plugin.php',
        'Firebase\\JWT\\BeforeValidException' => __DIR__ . '/..' . '/firebase/php-jwt/src/BeforeValidException.php',
        'Firebase\\JWT\\ExpiredException' => __DIR__ . '/..' . '/firebase/php-jwt/src/ExpiredException.php',
        'Firebase\\JWT\\JWK' => __DIR__ . '/..' . '/firebase/php-jwt/src/JWK.php',
        'Firebase\\JWT\\JWT' => __DIR__ . '/..' . '/firebase/php-jwt/src/JWT.php',
        'Firebase\\JWT\\SignatureInvalidException' => __DIR__ . '/..' . '/firebase/php-jwt/src/SignatureInvalidException.php',
        'VariableAnalysis\\Lib\\Constants' => __DIR__ . '/..' . '/sirbrillig/phpcs-variable-analysis/VariableAnalysis/Lib/Constants.php',
        'VariableAnalysis\\Lib\\Helpers' => __DIR__ . '/..' . '/sirbrillig/phpcs-variable-analysis/VariableAnalysis/Lib/Helpers.php',
        'VariableAnalysis\\Lib\\ScopeInfo' => __DIR__ . '/..' . '/sirbrillig/phpcs-variable-analysis/VariableAnalysis/Lib/ScopeInfo.php',
        'VariableAnalysis\\Lib\\ScopeType' => __DIR__ . '/..' . '/sirbrillig/phpcs-variable-analysis/VariableAnalysis/Lib/ScopeType.php',
        'VariableAnalysis\\Lib\\VariableInfo' => __DIR__ . '/..' . '/sirbrillig/phpcs-variable-analysis/VariableAnalysis/Lib/VariableInfo.php',
        'VariableAnalysis\\Sniffs\\CodeAnalysis\\VariableAnalysisSniff' => __DIR__ . '/..' . '/sirbrillig/phpcs-variable-analysis/VariableAnalysis/Sniffs/CodeAnalysis/VariableAnalysisSniff.php',
        'WCPOS\\WooCommercePOS\\API' => __DIR__ . '/../..' . '/includes/API.php',
        'WCPOS\\WooCommercePOS\\API\\Customers' => __DIR__ . '/../..' . '/includes/API/Customers.php',
        'WCPOS\\WooCommercePOS\\API\\Orders' => __DIR__ . '/../..' . '/includes/API/Orders.php',
        'WCPOS\\WooCommercePOS\\API\\Products' => __DIR__ . '/../..' . '/includes/API/Products.php',
        'WCPOS\\WooCommercePOS\\API\\Stores' => __DIR__ . '/../..' . '/includes/API/Stores.php',
        'WCPOS\\WooCommercePOS\\Activator' => __DIR__ . '/../..' . '/includes/Activator.php',
        'WCPOS\\WooCommercePOS\\Admin\\Notices' => __DIR__ . '/../..' . '/includes/Admin/Notices.php',
        'WCPOS\\WooCommercePOS\\Auth' => __DIR__ . '/../..' . '/includes/Auth.php',
        'WCPOS\\WooCommercePOS\\Auth\\JWT' => __DIR__ . '/../..' . '/includes/Auth/JWT.php',
        'WCPOS\\WooCommercePOS\\Deactivator' => __DIR__ . '/../..' . '/includes/Deactivator.php',
        'WCPOS\\WooCommercePOS\\Run' => __DIR__ . '/../..' . '/includes/Run.php',
        'WCPOS\\WooCommercePOS\\Status' => __DIR__ . '/../..' . '/includes/Status.php',
        'WCPOS\\WooCommercePOS\\i18n' => __DIR__ . '/../..' . '/includes/i18n.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitb86ec637313980c3ab39e5d77f4b945d::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitb86ec637313980c3ab39e5d77f4b945d::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitb86ec637313980c3ab39e5d77f4b945d::$classMap;

        }, null, ClassLoader::class);
    }
}
