<?php
/**
 * Created by PhpStorm.
 * User: php
 * Date: 29.09.18
 * Time: 10:58
 */

namespace App\Facedes;


use Illuminate\Support\Facades\Facade;

/**
 * Class Math
 * @package App\Math
 */
class Math extends Facade
{
    /**
     * Get the registered name of the component
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'math';
    }
}