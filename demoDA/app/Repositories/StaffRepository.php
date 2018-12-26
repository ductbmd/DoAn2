<?php

namespace App\Repositories;
use App\Repositories\Contracts\RepositoryInterface;
use App\Repositories\Eloquent\Repository;

use DB;

class StaffRepository extends Repository {


    /**
     * Specify Model class name
     *
     * @return mixed
     */
    function model()
    {
        return 'App\Staff';
    }
    public function paginate( $perPage=15,$columns = array('*')) {
        return $this->model->orderBy('position', 'desc')->paginate($perPage, $columns);
    }

}