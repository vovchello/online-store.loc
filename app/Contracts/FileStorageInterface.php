<?php
/**
 * Created by PhpStorm.
 * User: php
 * Date: 29.09.18
 * Time: 9:26
 */

namespace App\Contracts;


/**
 * Interface FileStorageInterface
 * @package App\Contracts
 */
interface FileStorageInterface
{
    /**
     * @return mixed
     */
    public function upload();


    /**
     * @return mixed
     *
     * @param integer $fileID
     */
    public function delete($fileID);
}