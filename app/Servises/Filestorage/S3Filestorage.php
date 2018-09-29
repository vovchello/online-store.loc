<?php
/**
 * Created by PhpStorm.
 * User: php
 * Date: 29.09.18
 * Time: 9:34
 */

namespace App\Servises\Filestorage;


use App\Contracts\FileStorageInterface;

class S3Filestorage implements FileStorageInterface
{

    public function upload()
    {
        return 'S3Filestorage is uploaded';
    }

    public function delete($fileID)
    {
        return 'delete S3Filestorage ';
    }

}