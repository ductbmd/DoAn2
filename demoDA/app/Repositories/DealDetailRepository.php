<?php

namespace App\Repositories;
use App\Repositories\Contracts\RepositoryInterface;
use App\Repositories\Eloquent\Repository;

use DB;

class DealDetailRepository extends Repository {


    /**
     * Specify Model class name
     *
     * @return mixed
     */
    function model()
    {
        return 'App\DealDetail';
    }
    
    public function show($deal_id)
    {
    	return $this->model->where('deal_id','=',$deal_id)->with('item.itemgoc')->get();
    }
}