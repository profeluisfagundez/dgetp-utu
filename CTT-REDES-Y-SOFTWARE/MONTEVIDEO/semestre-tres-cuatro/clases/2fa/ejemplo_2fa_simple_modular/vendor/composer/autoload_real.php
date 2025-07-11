<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInitd7ba257ed7dc39c5ef9e9ad33e48dbba
{
    private static $loader;

    public static function loadClassLoader($class)
    {
        if ('Composer\Autoload\ClassLoader' === $class) {
            require __DIR__ . '/ClassLoader.php';
        }
    }

    /**
     * @return \Composer\Autoload\ClassLoader
     */
    public static function getLoader()
    {
        if (null !== self::$loader) {
            return self::$loader;
        }

        require __DIR__ . '/platform_check.php';

        spl_autoload_register(array('ComposerAutoloaderInitd7ba257ed7dc39c5ef9e9ad33e48dbba', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInitd7ba257ed7dc39c5ef9e9ad33e48dbba', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInitd7ba257ed7dc39c5ef9e9ad33e48dbba::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
