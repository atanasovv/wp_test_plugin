<?php
/*
* @package WP_Test_Plugin
*/

namespace Inc;

final class Init
{

    /**
     * Store all the classes inside an array
     *
     * @return array An array of services.
     */
    public static function get_services()
    {
        return [
            Pages\Admin::class,
            Base\Enqueue::class,
            Base\Helper::class
        ];
    }

    public static function register_services()
    {
        foreach (self::get_services() as $class) {
            error_log ('Registering services' . $class);
            $service = self::instantiate($class);
            if (method_exists($service, 'register')) {
                $service->register();
            }
        }
    }

    /**
     * Initialize the class
     *
     * @param class $class class from the services array
     * @return class instance new instance of the class
     */
    private static function instantiate($class)
    {
        return new $class();
    }
}
