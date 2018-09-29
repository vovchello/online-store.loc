<?php
/**
 * Created by PhpStorm.
 * User: php
 * Date: 29.09.18
 * Time: 9:35
 */

namespace App\Servises\Filestorage;


use App\Contracts\FileStorageInterface;

class RackspaceFileStorage implements FileStorageInterface
{
    public function upload()
    {

        return 'RackspaceFileStorage is uploaded';
    }

    public function delete($fileID)
    {

        return 'delete RackspaceFileStorage ';
    }

}