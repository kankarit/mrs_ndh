<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInitfdd9d785eaf0a23e873c33ff8fc8264d
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

        spl_autoload_register(array('ComposerAutoloaderInitfdd9d785eaf0a23e873c33ff8fc8264d', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInitfdd9d785eaf0a23e873c33ff8fc8264d', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInitfdd9d785eaf0a23e873c33ff8fc8264d::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
