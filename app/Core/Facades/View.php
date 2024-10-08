<?php

namespace App\Core\Facades;

use App\Core\ViewRenderer;

/**
 * @method static layout(string $string)
 */
class View
{
    /**
     * @var ViewRenderer
     */
    private static ViewRenderer $view;

    /**
     * View init.
     *
     * @param ViewRenderer $view
     *
     * @return void
     */
    public static function init(ViewRenderer $view): void
    {
        self::$view = $view;
    }

    /**
     * Method for static call View instance.
     *
     * @param $name
     * @param $arguments
     *
     * @return mixed
     */
    public static function __callStatic($name, $arguments): mixed
    {
        return self::$view->$name(...$arguments);
    }
}
