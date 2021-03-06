<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit55a3095d8b5440c2b3f7a7c046ae6172
{
    public static $fallbackDirsPsr4 = array (
        0 => __DIR__ . '/../..' . '/',
    );

    public static $classMap = array (
        'AbstractUserRepositoryFactory' => __DIR__ . '/../..' . '/src/AbstractFactory/AbstractUserRepositoryFactory.php',
        'ComposerAutoloaderInit55a3095d8b5440c2b3f7a7c046ae6172' => __DIR__ . '/..' . '/composer/autoload_real.php',
        'Composer\\Autoload\\ClassLoader' => __DIR__ . '/..' . '/composer/ClassLoader.php',
        'Composer\\Autoload\\ComposerStaticInit55a3095d8b5440c2b3f7a7c046ae6172' => __DIR__ . '/..' . '/composer/autoload_static.php',
        'DBUSerRepositoryFactory' => __DIR__ . '/../..' . '/src/AbstractFactory/DBUSerRepositoryFactory.php',
        'IntegerStackAdapterTest' => __DIR__ . '/../..' . '/tests/IntegerStackAdapterTest.php',
        'PersonRepositoryInterface' => __DIR__ . '/../..' . '/src/AbstractFactory/PersonRepositoryInterface.php',
        'ReportsVisitorTest' => __DIR__ . '/../..' . '/tests/ReportsVisitorTest.php',
        'src\\Adapter\\ASCIIStackInterface' => __DIR__ . '/../..' . '/src/Adapapter/ASCIIStackInterface.php',
        'src\\Adapter\\IntegerStackAdapter' => __DIR__ . '/../..' . '/src/Adapapter/IntegerStackAdapter.php',
        'src\\Adapter\\IntegerStackInterface' => __DIR__ . '/../..' . '/src/Adapapter/IntegerStackInterface.php',
        'src\\Visitor\\CompanyVisitee' => __DIR__ . '/../..' . '/src/Visitor/CompanyVisitee.php',
        'src\\Visitor\\Employee' => __DIR__ . '/../..' . '/src/Visitor/Employee.php',
        'src\\Visitor\\ReportsVisitor' => __DIR__ . '/../..' . '/src/Visitor/ReportsVisitor.php',
        'src\\Visitor\\VisiteeInterface' => __DIR__ . '/../..' . '/src/Visitor/VisiteeInterface.php',
        'src\\Visitor\\VisitorInterface' => __DIR__ . '/../..' . '/src/Visitor/VisitorInterface.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->fallbackDirsPsr4 = ComposerStaticInit55a3095d8b5440c2b3f7a7c046ae6172::$fallbackDirsPsr4;
            $loader->classMap = ComposerStaticInit55a3095d8b5440c2b3f7a7c046ae6172::$classMap;

        }, null, ClassLoader::class);
    }
}
