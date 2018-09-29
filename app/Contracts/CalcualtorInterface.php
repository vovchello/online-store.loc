<?php
/**
 * Created by PhpStorm.
 * User: php
 * Date: 29.09.18
 * Time: 10:47
 */

namespace App\Contracts;


/**
 * Interface CalcualtorInterface
 * @package App\Contracts
 */
interface CalcualtorInterface
{
    /**
     * @param $first
     * @param $second
     * @return mixed
     */
    public  function add($first, $second);

}