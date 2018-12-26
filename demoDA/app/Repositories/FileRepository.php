<?php

namespace App\Repositories;

use App\Repositories\Contracts\RepositoryInterface;
use App\Repositories\Eloquent\Repository;

class FileRepository extends Repository {

   const VIDEO = 1;
   const AUDIO = 2;
   const IMAGE = 3;

    public static $file_types = [
        self::VIDEO => 'Video',
        self::AUDIO => 'Audio',
        self::IMAGE => 'Image'
    ];


    /**
     * Specify Model class name
     *
     * @return mixed
     */
    function model()
    {
        return 'App\Models\File';
    }

    // /**
    //  * @param array $pattern
    //  * @return mixed
    //  */
    // public function insertRelationShip($data)
    // {
    //     return $this->model->insert($data);
    // }

    // /**
    //  * @param array $pattern
    //  * @return mixed
    //  */
    // public function deleteRelation($pattern) {
    //     return $this->model->where($pattern)->delete();
    // }
    public function removeOldFile($id){
        // return $this->remove;
    }

}
