<?php
/**
 * Created by PhpStorm.
 * User: php
 * Date: 29.09.18
 * Time: 10:48
 */

namespace App\Servises\Calculator;


use App\Contracts\CalcualtorInterface;

/**
 * Class Calculator
 * @package App\Servises\Calculator
 */
class Calculator implements CalcualtorInterface
{
    /**
     * @param $first
     * @param $second
     * @return mixed
     */
    public function add($first, $second)
    {
        return $first + $second;
    }
}